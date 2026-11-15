<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class ReviewController extends BaseController
{
    private $reviewModel;

    public function __construct()
    {
        $this->reviewModel = new ReviewModel();
    }

    // List all reviews
    public function index()
    {
        $data['reviews'] = $this->reviewModel->findAll();
        return view('reviews/index', $data);
    }

    // Add a new review
  public function add()
    {
        if ($this->request->getMethod() == 'POST') {
            $createdAt = $this->request->getPost('created_at');
            $formattedCreatedAt = date('Y-m-d H:i:s', strtotime($createdAt)); 

            $this->reviewModel->save([
                'name'  => $this->request->getPost('name'),
                'review' => $this->request->getPost('review'),
                'created_at' => $formattedCreatedAt, 
                'status' => 0, // Default to inactive
            ]);

            return redirect()->to('/admin/reviews')->with('message', 'Review added successfully!');
        }

        return view('reviews/add');
    }

    // Edit a review
    public function edit($id)
    {
        $review = $this->reviewModel->find($id);
        $createdAt = $this->request->getPost('created_at');
        $formattedCreatedAt = date('Y-m-d H:i:s', strtotime($createdAt)); 
        if ($this->request->getMethod() == 'POST') {
           $result= $this->reviewModel->update($id, [
                'name'   => $this->request->getPost('name'),
                'review' => $this->request->getPost('review'),
                'created_at' => $formattedCreatedAt, 
            ]);

if (!$result) {
    dd($this->reviewModel->errors());
}

            return redirect()->to('/admin/reviews')->with('message', 'Review updated successfully!');
        }

        return view('reviews/edit', ['review' => $review]);
    }

    // Delete a review
    public function delete($id)
    {
        $this->reviewModel->delete($id);
        return redirect()->to('/admin/reviews')->with('message', 'Review deleted successfully!');
    }

    // Toggle active/inactive status
    public function toggleStatus($id)
    {
        $review = $this->reviewModel->find($id);

        if ($review) {
            $newStatus = $review['status'] == 1 ? 0 : 1;
            $this->reviewModel->update($id, ['status' => $newStatus]);

            return redirect()->to('/admin/reviews')->with('message', 'Status updated successfully!');
        }

        return redirect()->to('/admin/reviews')->with('error', 'Review not found.');
    }
}
