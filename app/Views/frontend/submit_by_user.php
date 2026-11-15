<?php
require 'email_sender.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   echo 'helo';
    $to = 'ashish80pl@gmail.com';
    $name = 'printmenow1';
    $subject = 'Enquiry';

    ob_start();
    $formData = $_POST;

    include 'submit_info_by_use_email_design.php';
    $email_body = ob_get_clean();
    $result = sendEmail($to, $name, $subject, $email_body);
    echo $result;
    if($result == 'Message sent successfully!'){
        header("Location: thank-you.php");
    }
    exit;
}
?>
