<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data to prevent XSS attacks and email injection
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo json_encode(array('status' => 'error', 'message' => 'Invalid email address.'));
        exit;
    }

    // Set up the email parameters
    $to = "sisaybekele735@gmail.com";
    $subject = "Message from Contact Form";
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Set headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Attempt to send email
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo json_encode(array('status' => 'success', 'message' => 'Your message has been sent. Thank you!'));
    } else {
        // Error sending email
        echo json_encode(array('status' => 'error', 'message' => 'Oops! Something went wrong and we could not send your message.'));
    }
} else {
    // Not a POST request, handle accordingly (redirect or error response)
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method.'));
}
?>
