<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // Set the recipient email address
    $to = "sumitkarki1114@gmail.com";  // Replace with your email

    // Set the email subject
    $subject = "Portfolio Contact Form Submission from " . $name;

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p>Thank you for reaching out! Your message has been sent successfully.</p>";
    } else {
        echo "<p>Oops! Something went wrong, and we couldn't send your message.</p>";
    }
}
?>
