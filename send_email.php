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
$config = include(__DIR__ . '/config.php');

// Set the response header to JSON
header('Content-Type: application/json');

// Always-return-success responses (bots get no signal)
function success_response() {
    echo json_encode([
        'type' => 'success',
        'text' => 'Message sent successfully!'
    ]);
    exit;
}

// Log blocked submissions for monitoring
function log_blocked($reason, $data) {
    $logfile = __DIR__ . '/spam_log.txt';
    $entry = date('Y-m-d H:i:s') . " | " . $reason . " | " . json_encode($data) . "\n";
    @file_put_contents($logfile, $entry, FILE_APPEND | LOCK_EX);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'type' => 'error',
        'text' => 'Invalid request method.'
    ]);
    exit;
}

// ── SPAM CHECK 1: Honeypot ──────────────────────────────────────
// Hidden field that real users never see or fill.
// Bots auto-fill every field they find.
if (!empty($_POST['website'])) {
    log_blocked('honeypot', ['website' => $_POST['website']]);
    success_response(); // silently discard
}

// ── SPAM CHECK 2: Timestamp ─────────────────────────────────────
// JS sets loaded_at = Date.now() on page load.
// Bots hitting the endpoint directly (no JS) won't have this field.
// Submissions under 3 seconds are bot-like.
if (isset($_POST['loaded_at']) && is_numeric($_POST['loaded_at'])) {
    $elapsed = (time() * 1000 - intval($_POST['loaded_at'])) / 1000;
    if ($elapsed < 3) {
        log_blocked('too_fast', ['elapsed' => $elapsed]);
        success_response();
    }
} else {
    // No timestamp at all = bot hitting endpoint directly
    log_blocked('no_timestamp', []);
    success_response();
}

// ── SPAM CHECK 3: Content analysis ──────────────────────────────
$firstName  = trim($_POST['firstName'] ?? '');
$lastName   = trim($_POST['lastName'] ?? '');
$userEmail  = trim($_POST['userEmail'] ?? '');
$userPhone  = trim($_POST['userPhone'] ?? '');
$userMessage = trim($_POST['userMessage'] ?? '');

// Reject if name looks like random gibberish (all uppercase, no vowels pattern)
function is_gibberish($str) {
    // Empty or too short = no
    if (strlen($str) < 2) return false;
    // If it's all uppercase and >15 chars with no spaces, likely random
    if (strtoupper($str) === $str && strlen($str) > 15 && strpos($str, ' ') === false) {
        // Count vowels - if <15% vowels, it's gibberish
        $vowels = preg_match_all('/[AEIOUY]/i', $str);
        if ($vowels / strlen($str) < 0.15) return true;
    }
    return false;
}

// Name is gibberish
if (is_gibberish($firstName) || is_gibberish($lastName)) {
    log_blocked('gibberish_name', ['first' => $firstName, 'last' => $lastName]);
    success_response();
}

// Message is gibberish (short random string with no spaces)
if (strlen($userMessage) < 30 && strpos($userMessage, ' ') === false && strlen($userMessage) > 5) {
    // Check if it looks like a random token (mixed case, no English words)
    $wordCount = str_word_count($userMessage);
    if ($wordCount === 0) {
        log_blocked('gibberish_message', ['msg_len' => strlen($userMessage)]);
        success_response();
    }
}

// ── PASSED ALL CHECKS: Send the email ───────────────────────────

// Sanitize inputs for email
$firstName   = htmlspecialchars($firstName);
$lastName    = htmlspecialchars($lastName);
$userEmail   = htmlspecialchars($userEmail);
$userPhone   = htmlspecialchars($userPhone);
$userMessage = htmlspecialchars($userMessage);

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP server configuration
    $mail->isSMTP();
    $mail->Host = 'mail.privateemail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $config['smtp_username'];
    $mail->Password = $config['smtp_password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

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
