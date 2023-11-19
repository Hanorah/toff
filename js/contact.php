<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "your_email@example.com"; // Replace with your email
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    $emailBody = "You have received a new message from the contact form on your website.\n\n".
        "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    mail($to, $subject, $emailBody, $headers);
}
?>
