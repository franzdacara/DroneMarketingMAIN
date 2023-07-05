<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email content
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'Contact Form Submission';
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $content = "Name: $name\n";
    $content .= "Email: $email\n";
    $content .= "Message: $message\n";

    // Send email
    $success = mail($to, $subject, $content, $headers);

    if ($success) {
        // Email sent successfully
        echo 'Thank you for your message. We will get back to you soon.';
    } else {
        // Email failed to send
        echo 'Sorry, there was a problem sending your message. Please try again later.';
    }
}
?>