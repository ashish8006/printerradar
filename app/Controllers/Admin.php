<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{

    public function login_to_dashboard()
    {
   
        $session = session();
        // if ($this->request->getMethod() === 'post') {
            

            $email = $this->request->getPost('email');
           
            $password = $this->request->getPost('password');
            $adminModel = new AdminModel();

            $admin = $adminModel->where('email', 'admin@gmail.com')->first();
            if ($admin) {
                // Verify password
                if (password_verify($password, $admin['password'])) {
                    // Set session data
                    $session->set([
                        'admin_id' => $admin['id'],
                        'admin_name' => $admin['name'],
                        'is_logged_in' => true,
                    ]);

                    // Redirect to dashboard
                    return redirect()->to(base_url('admin/dashboard'));
                } else {
                    $session->setFlashdata('error', 'Invalid password.');
                }
            } else {
                $session->setFlashdata('error', 'Admin not found.');
            }
        // }

        // Load the login view
        return redirect()->to(base_url('login'));
    }


    public function dashboard()
    {
        $session = session();
        if (!$session->get('admin_id')) {
            return redirect()->to(base_url('login'));
        }

        return view('admin_dashboard', ['name' => $session->get('admin_name')]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
    
}
