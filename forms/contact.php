<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path-to-phpmailer/Exception.php';
require 'path-to-phpmailer/PHPMailer.php';
require 'path-to-phpmailer/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Enable verbose debug output
    $mail->SMTPDebug = 2;

    // Set the hostname of the mail server
    $mail->Host = 'smtp.mail.yahoo.com';

    // Enable SMTP authentication
    $mail->SMTPAuth = true;

    // Set the SMTP port number (465 for SSL or 587 for TLS)
    $mail->Port = 465;

    // Set your Yahoo email address and password
    $mail->Username = 'arjiv28@yahoo.com'; // Replace with your Yahoo email address
    $mail->Password = 'Cassiel2023$'; // Replace with your Yahoo email password

    // Set the sender's and recipient's email addresses
    $mail->setFrom('arjiv28@yahoo.com', 'Charles Magno'); // Replace with your Yahoo email address and your name
    $mail->addAddress('recipient@example.com', 'Recipient Name'); // Replace with the recipient's email address and name

    // Set email subject and body
    $mail->isHTML(true);
    $mail->Subject = 'Subject Here';
    $mail->Body = 'Message body goes here.';

    // Send the email
    $mail->send();
    echo 'Email has been sent successfully!';
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}
?>
