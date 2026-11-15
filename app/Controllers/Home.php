<?php

namespace App\Controllers;
use App\Models\ReviewModel;
use App\Models\BlogModel;
class Home extends BaseController
{

     private $blogModel;


     private function checkPageAccess()
        {
            if (!session()->get('allow_private_pages')) {
                return redirect()->to(base_url());
            }

            return null;
        }

    public function __construct()
    {
        $this->blogModel = new BlogModel();
         $this->request = service('request');
        helper('text'); 
    }

    public function index()
    {
        $data['page_name'] = 'home';
        return view('frontend/index.php', $data);
    }

    
public function blogs()
  {
        $q = $this->request->getGet('q');

        if ($q) {
            // basic search over title and description
            $blogs = $this->blogModel
                          ->like('title', $q)
                          ->orLike('description', $q)
                          ->orderBy('id', 'DESC')
                          ->findAll();
        } else {
            $blogs = $this->blogModel->orderBy('id', 'DESC')->findAll();
        }

        // Recent posts for sidebar (limit 5)
        $recent = $this->blogModel->orderBy('id', 'DESC')->findAll(5);

    
         $data['page_name'] = 'blogs';
         $data['blogs'] = $blogs;
         $data['recent'] = $recent;
        return view('frontend/index.php', $data);
    }

    /**
     * Single blog detail by slug
     */
    public function blog($slug = null)
    {
        if (!$slug) {
            return redirect()->to('/blogs');
        }

        $blog = $this->blogModel->where('slug', $slug)->first();

        if (!$blog) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Blog not found");
        }
         $data['blog'] = $blog;
        return view('frontend/blog_detail.php', $data);
        
    }


    public function understandingtheissue()
    {
        $form_data = session()->get('form_data');
        $data['printer_brand'] = !empty($form_data['printer_brand']) ? $form_data['printer_brand'] : "HP";
        $data['page_name'] = 'understanding_the_issue';
        return view('frontend/index.php', $data);
    }


    public function under_stand_the_issue()
    {
        $formData = $this->request->getPost();
        session()->set('form_data', $formData);
        return redirect()->to('/understanding-the-issue');
    }



 public function userDetail()
{
    if ($this->request->getMethod() === 'POST') {

        $formData = $this->request->getPost();

        session()->set('form_data', $formData);
        session()->set('allow_private_pages', true);

        return redirect()->to('/detail');
    }

    return redirect()->to(base_url());
}


    public function detail()
{
        if ($redirect = $this->checkPageAccess()) {
        return $redirect;
    }
    $data['form_data'] = session()->get('form_data');
    $data['page_name'] = 'detail';
    return view('frontend/index.php', $data);
}


public function resolution_center_redirect_fun()
{
    if ($this->request->getMethod() !== 'POST') {
        return redirect()->to(base_url());
    }

    $formData = $this->request->getPost();

    if (empty($formData['email'])) {
        return redirect()->to(base_url());
    }

    session()->set('form_data', $formData);
    session()->set('allow_private_pages', true);

    return redirect()->to('/resolution-center');
}




    public function resolution_center()
    {

      if ($redirect = $this->checkPageAccess()) {
        return $redirect;
    }

        $formData = session()->get('form_data');

        if (empty($formData['email'])) {
            return redirect()->to(base_url());
        }

        $data['form_data'] = $formData;
        $emailAddress = $formData['email'];
        $name = $formData['name'];
        $request = \Config\Services::request();
        $email = \Config\Services::email();
        $ipAddress = $request->getIPAddress();

        // Send first email from no-reply@printerradar.com
        $email->setFrom('support@printerradar.com', 'Support Printerradar');
        $email->setTo('leads@printerradar.com');
        $email->setSubject('Client Information');
        $htmlMessage = view('frontend/userinfoemail', compact('formData', 'ipAddress'));
        $email->setMessage($htmlMessage);

        if ($email->send()) {

    // 2. Send a separate short notification to Gmail
        // $email->clear();

        // $email->setFrom('support@printerradar.com', 'Printerradar Notifications');
        // $email->setTo('sumitkdasexp@gmail.com');
        // $email->setSubject('New Lead Received - Printerradar');

        // $notificationMessage = "
        //     <h3>New Lead Received!</h3>
        //     <p>A new customer has submitted a lead on Printerradar.</p>
        //     <p>Please check your leads inbox for complete customer information.</p>
        // ";

        // $email->setMessage($notificationMessage);
        // $email->send();

            $data['problem_facing'] = $formData['problem_facing'];
            $data['page_name'] = 'resolution_center';
            return view('frontend/index.php', $data);
        } else {
           $data = $email->printDebugger(['headers']);
         print_r($data);
          die;
        }
    }


    //  public function resolution_center()
    // {
     
    //     $formData = session()->get(key: 'form_data');
    //     if (!isset($formData['email'])) {
    //         return redirect()->to('/');
    //     }
    //     $data['form_data'] = session()->get('form_data');
    //     $emailAddress = $formData['email'];
    //     $name = $formData['name'];
    //     $request = \Config\Services::request();
    //     $email = \Config\Services::email();
    //     $ipAddress = $request->getIPAddress();

    //     // Send first email from no-reply@printerradar.com
    //     $email->setFrom('support@printerradar.com', 'Support Printerradar');
    //     $email->setTo('leads@printerradar.com');
    //     $email->setSubject('Client Information');
    //     $htmlMessage = view('frontend/userinfoemail', compact('formData', 'ipAddress'));
    //     $email->setMessage($htmlMessage);

    //     if ($email->send()) {
    //         $data['problem_facing'] = $formData['problem_facing'];
    //         $data['page_name'] = 'resolution_center';
    //         return view('frontend/index.php', $data);
    //     } else {
    //        $data = $email->printDebugger(['headers']);
    //      print_r($data);
    //       die;
    //     }
    // }




    public function send_troubleshooting_mail()
    {
        $formData = session()->get('form_data');
        $emailAddress = $formData['email'];
        $email = \Config\Services::email();
    
        $email->clear(true); 
        $email->setFrom('noreply@printerradar.com', 'Printerradar Team'); 
        $email->setTo($emailAddress); 
        $email->setSubject('Support Confirmation');
    
        $supportMessage = view('frontend/troubleshooting_email', compact('formData')); 
        $email->setMessage($supportMessage);
    
        if ($email->send()) {
            return $this->response->setJSON(['success' => true, 'message' => 'Email sent successfully.']);
        } else {
            // Get detailed error information
            $errorDetails = $email->printDebugger(['headers', 'subject', 'body']);
            log_message('error', $errorDetails); // Log error details for further analysis
            return $this->response->setJSON(['success' => false, 'message' => 'Failed to send email.', 'errorDetails' => $errorDetails]);
        }
    }
    

    public function view_troubleshooting_mail(){
        $supportMessage = view('frontend/troubleshooting_email'); 
        echo $supportMessage;
    }



    public function resolutionAndTroubleshooting()
    {
         if ($redirect = $this->checkPageAccess()) {
        return $redirect;
    }

        $data['formData'] = session()->get('form_data');
        $data['page_name'] = 'resoution-and-troubleshooting';
        return view('frontend/index.php', $data);
    }

    public function thankYouPage()
    {

      if ($redirect = $this->checkPageAccess()) {
        return $redirect;
    }

    
        $data['formData'] = session()->get('form_data');
        $data['page_name'] = 'thankYouPage';
        return view('frontend/index.php', $data);
    }

    public function privacy_policy()
    {
        $data['page_name'] = 'privacy_policy';
        return view('frontend/index.php', $data);
    }


    public function login()
    {
        $data['page_name'] = 'admin_login';
        return view('frontend/index.php', $data);
    }


    public function contact_us()
    {
        $data['page_name'] = 'contact_us';
        return view('frontend/index.php', $data);
    }
    
   
    public function about_us()
    {
        $data['page_name'] = 'about_us';
        return view('frontend/index.php', $data);
    }

    public function sendEmail()
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect()->to(base_url());
        }

        $formData = $this->request->getPost();
        $emailAddress = $formData['email'] ?? null;
        $name = $formData['name'] ?? 'Printerradar Customer';

        if (empty($emailAddress) || ! filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->with('error', 'Please provide a valid email address.');
        }

        $request = \Config\Services::request();
        $email = \Config\Services::email();
        $ipAddress = $request->getIPAddress();

        $email->setFrom($emailAddress, $name);
        $email->setTo('support@printerradar.com');
        $email->setSubject('Client Information');

        $htmlMessage = view('frontend/userinfoemail', compact('formData', 'ipAddress'));
        $email->setMessage($htmlMessage);

        if ($email->send()) {
            session()->set('form_data', $formData);
            session()->set('allow_private_pages', true);
            return redirect()->to('/thank-you');
        }

        log_message('error', 'sendEmail failed: ' . $email->printDebugger(['headers']));
        return redirect()->back()->withInput()->with('error', 'Unable to send your request. Please try again.');
    }

    public function faq()
    {
        $data['page_name'] = 'faq';
        return view('frontend/index.php', $data);
    }

    public function reviews()
    {
        // Load the model
        $reviewModel = new ReviewModel();
        $perPage = 10;
        $reviews = $reviewModel->where('status', 1)->paginate($perPage, 'reviews');
        $pager = $reviewModel->pager;
        $data['reviews'] = $reviews;
        $data['pager'] = $pager;
        $data['page_name'] = 'reviews';
        return view('frontend/index', $data);
    }

    public function save_review()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'user_name' => 'required|min_length[3]|max_length[255]',
            'review' => 'required|min_length[5]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $name = $this->request->getPost('user_name');
        $review = $this->request->getPost('review');
        $reviewModel = new ReviewModel();
        $reviewModel->insert([
            'name' => $name,
            'review' => $review
        ]);
        return redirect()->to('/reviews')->with('message', 'Review submitted successfully!');
    }



// public function send_contact_us_mail()
//     {
//      echo 'hello';
//         $formData = $this->input->post();
//         print_r($formData);
//         $request = \Config\Services::request();
//         $email = \Config\Services::email();
//         $ipAddress = $request->getIPAddress();

//         $email->setFrom('support@printerradar.com', 'Support Printerradar');
//         $email->setTo('leads@printerradar.com');
//         $email->setSubject('Client Information');
//         $htmlMessage = view('frontend/contact_us_mail_template', compact('formData', 'ipAddress'));
        
//         $email->setMessage($htmlMessage);

//          if ($email->send()) {
//         echo "Message sent successfully.";
//             } else {
//                 echo "Message could not be sent.";
//             }
//     }

public function send_contact_us_mail()
{
 
   $formData = $_POST;
    
    // Services for IP and Email
    $request = \Config\Services::request();
    $email = \Config\Services::email();
    $ipAddress = $request->getIPAddress();

    // Setting up email
    $email->setFrom('support@printerradar.com', 'Support Printerradar');
    $email->setTo('leads@printerradar.com');
    $email->setSubject('Client Information');

    // Generating email message
    $htmlMessage = view('frontend/contact_us_mail_template', compact('formData', 'ipAddress'));

    
    $email->setMessage($htmlMessage);

    // Sending email and checking the result
    if ($email->send()) {
        echo "Message sent successfully.";
    } else {
        echo "Message could not be sent.";
        // Debugging email issues
        echo $email->printDebugger(['headers', 'subject', 'body']);
    }
}

  public function support_plan()
    {
        $status = $this->request->getVar('status');
         
        $data['page_name'] = 'support';
        $data['status'] = $status;
        return view('frontend/index.php', $data);
    }
    
      public function affiliate_products()
    {
        $data['page_name'] = 'affiliate_products';
        return view('frontend/index.php', $data);
    }




 public function sendSupportPlanEmail()
{
    $formData = [
        'name' => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
         'phone' => $this->request->getPost('phone'),
        'plan' => $this->request->getPost('selectedPlan'), 
    ];

    $emailAddress = $formData['email'];
    $name = $formData['name'];
    $request = \Config\Services::request();
    $email = \Config\Services::email();

    $ipAddress = $request->getIPAddress();

    $email->setFrom($emailAddress, $name);
    $email->setTo('leads@printerradar.com');
    $email->setSubject('Client Information');

    // Load email template
    $htmlMessage = view('frontend/support-plan-email-template', compact('formData', 'ipAddress'));
    $email->setMessage($htmlMessage);

    // Send the email
    if ($email->send()) {
        return redirect()->to('/support-plan?status=success');
    } else {
        $data = $email->printDebugger(['headers']);
        log_message('error', 'Email sending failed: ' . json_encode($data)); // Logging error instead of print_r
        return redirect()->back()->with('error', 'Failed to send email. Please try again.');
    }
}



}