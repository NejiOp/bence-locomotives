<?php 
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $recipient_email ="kakashihatake6291@gmail.com";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = "New Message From $name";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    $header = "From: $name <$email>";

    if (mail($recipient_email, $subject, $email_content, $header) ) {
        echo "THankyou! Your message has been sent.";
    } else {
        echo "Ooops! Something went wrong and we couldn't send your message.";
    }
 } else{
    echo "There was an error with your submission. Please Try again.";
 }



?>