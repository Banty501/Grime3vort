<?php
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Local test (you can configure real SMTP later)
    $mail->isSMTP();
    $mail->Host = '127.0.0.1';
    $mail->SMTPAuth = false;
    $mail->Port = 1025;

    $mail->setFrom('from@example.com', 'Test Sender');
    $mail->addAddress('to@example.com', 'Test Recipient');

    $mail->isHTML(true);
    $mail->Subject = 'Local Test Email';
    $mail->Body    = 'This is a local test email captured by MailHog.';

    $mail->send();
    echo 'Message has been sent locally!';
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}
