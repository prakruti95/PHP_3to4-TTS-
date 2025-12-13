<?php
require 'emailSender.php';

// Create EmailSender object
$email = new EmailSender(
    'smtp.gmail.com',      // SMTP host
    'submitdata123@gmail.com', // Your email
    'jfpxtfztqofsrfpu',    // App password
    587,                    // Port
    'tls'                   // Encryption
);

// Set sender
$email->setFrom('submitdata123@gmail.com', 'TopsTech');

// Add recipient
$email->addRecipient('asfakshaikh287@gmail.com', 'Recipient Name');

// Set subject and body
$email->setSubject('Test Email using OOP PHPMailer');
$email->setBody('<h1>Hello from OOP PHPMailer!</h1>', 'Hello from OOP PHPMailer!');

// Send email
if($email->send()) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
