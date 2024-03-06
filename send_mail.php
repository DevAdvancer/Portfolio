<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    $to = "theabhirupkumar@gmail.com";
    $subject = "New message from $fullname";
    $body = "Email: $email\n\nMessage:\n$message";
    $headers = "From: $fullname <$email>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully";
    } else {
        throw new Exception("Error sending message");
    }
} 
?>