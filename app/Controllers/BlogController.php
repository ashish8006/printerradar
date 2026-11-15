<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    private $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    // List all blogs
    public function index()
    {
        $data['blogs'] = $this->blogModel->findAll();
        return view('blogs/index', $data);
    }

    // Show add form
    public function add()
    {
        return view('blogs/add');
    }

    // Store new blog
  public function store()
{
    helper(['text']);

    // Basic field validation
    $rules = [
        'meta_title'        => 'required|string',
        'meta_description'  => 'required|string',
        'title'             => 'required|string',
        'description'       => 'required|string',
        // Do NOT require image on create; validate it only if present
    ];

    // If an image is uploaded, add file rules
    $image = $this->request->getFile('image');
    if ($image && $image->isValid() && $image->getError() === UPLOAD_ERR_OK) {
        $rules['image'] = 'is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/webp]|max_size[image,2048]';
    }

    if (! $this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    // Handle file upload (optional)
    $imageName = null;
    if ($image && $image->isValid() && !$image->hasMoved()) {
        $uploadPath = FCPATH . 'uploads';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true); // ensure directory exists
        }
        $imageName = $image->getRandomName();
        $image->move($uploadPath, $imageName);
    }

    // Save blog
    $this->blogModel->save([
        'meta_title'       => (string) $this->request->getPost('meta_title'),
        'meta_description' => (string) $this->request->getPost('meta_description'),
        'title'            => (string) $this->request->getPost('title'),
        'slug'             => url_title($this->request->getPost('title'), '-', true),
        'description'      => (string) $this->request->getPost('description'),
        'image'            => $imageName, // null if none uploaded
        'status'           => 0,
        'created_at'       => date('Y-m-d H:i:s'),
    ]);

    return redirect()->to(base_url('admin/blogs'))->with('message', 'Blog added successfully!');
}

    // Edit blog
    public function edit($id)
    {
        $blog = $this->blogModel->find($id);
        // echo "<pre>";print_r($this->request->getPost()); echo "</pre>"; die;
     
        if ($this->request->getMethod() == 'POST') {
            $image = $this->request->getFile('image');
            $imageName = $blog['image']; // Keep old image if not uploaded

            if ($image && $image->isValid() && !$image->hasMoved()) {
                // Delete old image if exists
                if ($blog['image'] && file_exists(FCPATH . 'uploads/' . $blog['image'])) {
                    @unlink(FCPATH . 'uploads/' . $blog['image']);
                }

                $imageName = $image->getRandomName();
                $image->move(FCPATH . 'uploads', $imageName); // Save new image
            }

            $this->blogModel->update($id, [
                'meta_title'       => $this->request->getPost('meta_title'),
                'meta_description'       => $this->request->getPost('meta_description'),
                'title'       => $this->request->getPost('title'),
                'slug'        => url_title($this->request->getPost('title'), '-', true),
                'description' => $this->request->getPost('description'),
                'image'       => $imageName,
            ]);

            return redirect()->to('/admin/blogs')->with('message', 'Blog updated successfully!');
        }

        return view('blogs/edit', ['blog' => $blog]);
    }

    // Delete blog
    public function delete($id)
    {
        $blog = $this->blogModel->find($id);

        if ($blog && $blog['image'] && file_exists(FCPATH . 'uploads/' . $blog['image'])) {
            @unlink(FCPATH . 'uploads/' . $blog['image']); // Delete image
        }

        $this->blogModel->delete($id);
        return redirect()->to('/admin/blogs')->with('message', 'Blog deleted successfully!');
    }

    // Toggle status
    public function toggleStatus($id)
    {
        $blog = $this->blogModel->find($id);
        if ($blog) {
            $newStatus = $blog['status'] == 1 ? 0 : 1;
            $this->blogModel->update($id, ['status' => $newStatus]);
            return redirect()->to('/admin/blogs')->with('message', 'Status updated successfully!');
        }
        return redirect()->to('/admin/blogs')->with('error', 'Blog not found.');
    }
}