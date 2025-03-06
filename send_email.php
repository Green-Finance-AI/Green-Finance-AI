<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Load PHPMailer files from the correct vendor directory
require 'vendor/PHPMailer-6.9.3/PHPMailer.php';
require 'vendor/PHPMailer-6.9.3/SMTP.php';
require 'vendor/PHPMailer-6.9.3/Exception.php';

// Load configuration securely from outside public_html
$config = include(__DIR__ . '/../config.php'); // Adjust the path as needed

// Set the response header to JSON
header('Content-Type: application/json');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and assign form inputs
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $userEmail = htmlspecialchars($_POST['userEmail']);
    $userPhone = htmlspecialchars($_POST['userPhone']);
    $userMessage = htmlspecialchars($_POST['userMessage']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP server configuration
        $mail->isSMTP();
        $mail->Host = 'mail.privateemail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp_username'];
        $mail->Password = $config['smtp_password'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // TLS port, use 465 for SSL

        // Email sender and recipient
        $mail->setFrom('alice@greenfinanceai.com', 'Green Finance AI');
        $mail->addAddress('alice@greenfinanceai.com', 'Alice');
        $mail->addReplyTo($userEmail, $firstName . ' ' . $lastName);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $firstName $lastName</p>
            <p><strong>Email:</strong> $userEmail</p>
            <p><strong>Phone:</strong> $userPhone</p>
            <p><strong>Message:</strong><br>$userMessage</p>
        ";
        $mail->AltBody = "Name: $firstName $lastName\nEmail: $userEmail\nPhone: $userPhone\nMessage: $userMessage";

        // Send the email and return a JSON response
        if ($mail->send()) {
            echo json_encode([
                'type' => 'success',
                'text' => 'Message sent successfully!'
            ]);
        } else {
            echo json_encode([
                'type' => 'error',
                'text' => 'Message could not be sent. Error: ' . $mail->ErrorInfo
            ]);
        }

    } catch (Exception $e) {
        echo json_encode([
            'type' => 'error',
            'text' => 'Mailer Error: ' . $mail->ErrorInfo
        ]);
    }

} else {
    echo json_encode([
        'type' => 'error',
        'text' => 'Invalid request method.'
    ]);
}
?>
