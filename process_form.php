<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set up the email parameters
    $to = "sisaybekele735@gmail.com";
    $subject = "Message from Contact Form";
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Set headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

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
