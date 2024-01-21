<?php
require './config/function.php';

if(isset($_POST['verification_code'])){
// Function to generate random verification code
function generateVerificationCode($length = 6) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

// Function to send verification email
function sendVerificationEmail($email, $verificationCode) {
    // Use PHP's mail function or a library like PHPMailer to send the email
    // Example using PHP's mail function
    $subject = "Email Verification";
    $message = "Your verification code is: $verificationCode";
    $headers = "From: your_email@example.com";

    mail($email, $subject, $message, $headers);
}
}
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Generate verification code
    $verificationCode = generateVerificationCode();

    // Insert email and verification code into database
    $sql = "INSERT INTO user (email, verification_code) VALUES ('$email', '$verificationCode')";

    if ($conn->query($sql) === TRUE) {
        // Send verification email
        sendVerificationEmail($email, $verificationCode);
        echo "Verification email sent. Please check your email to complete the verification.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
