<?php
require 'vendor/autoload.php'; 
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$phpmailer = new PHPMailer(true);

$app_url = 'https://printerradar.com/';

try {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'mail.printerradar.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Username   = 'no-reply@printerradar.com';
    $phpmailer->Password   = '4VR@F;2Lrb;.';
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port       = 465;
    $phpmailer->isHTML(true);

    $name = $_POST['name'] ?? $_POST['contact_name'] ?? 'Unknown';
    $email = $_POST['email'] ?? $_POST['contact_email'] ?? 'No Email';
    $phone = $_POST['phone'] ?? $_POST['contact_phone'] ?? 'No Phone';
    $country_code = $_POST['country_code'] ?? '';
    $change_ink = $_POST['change_ink'] ?? '';
    $change_internet = $_POST['change_internet'] ?? '';

    $phpmailer->setFrom('no-reply@printerradar.com', 'Support Print Me Now');
    $phpmailer->addAddress('leads@printerradar.com', $name);
    $phpmailer->Subject = 'Printer Issues';

    $email_body = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer Issues</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 10px 0;
            border-bottom: 2px solid #4CAF50;
        }
        .header h1 {
            margin: 0;
            color: #4CAF50;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            color: #777;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Printer Issue Report</h1>
        </div>
        <div class="content">
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Country Code:</strong> {$country_code}</p>
            <p><strong>Changed Ink Cartridge:</strong> {$change_ink}</p>
            <p><strong>Change Internet Service:</strong> {$change_internet}</p>
            <p><strong>IP Address:</strong> {$_SERVER['REMOTE_ADDR']}</p>
        </div>
        <div class="footer">
            <p>Thank you for contacting us!</p>
            <p>&copy; 2025 Printerradar</p>
        </div>
    </div>
</body>
</html>';

    $phpmailer->Body = $email_body;

    if ($phpmailer->send()) {
        echo "Message sent successfully.";
    } else {
        echo "Message could not be sent.";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: " . $phpmailer->ErrorInfo;
}
?>
