<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$phpmailer = new PHPMailer(true);

$app_url = 'https://printerradar.com/';

try {

    $phpmailer->isSMTP();
    $phpmailer->Host = 'mail.printerradar.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = 'no-reply@printerradar.com';
    $phpmailer->Password = 'k%7#CG=f~&~{';
    $phpmailer->Port = 587;
    $phpmailer->isHTML(true);
    $app_url = 'https://printerradar.com/';
    $phpmailer->setFrom('no-reply@printerradar.com', 'Support Print Me Now');
    $phpmailer->addAddress($_POST['email'], $_POST['name']);
    $phpmailer->Subject = 'Printer Issues';
    ob_start();
    $formData = $_POST; 
    include 'email.php';
    $email_body = ob_get_clean();

    $phpmailer->Body = $email_body;

    // Send the email
    $phpmailer->send();
    echo 'Message sent successfully!';
} catch (Exception $e) {
    echo 'Mailer Error: ' . $phpmailer->ErrorInfo;
}
?>
