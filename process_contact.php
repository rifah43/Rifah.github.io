<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Thank you!";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'bsse1213@iit.du.ac.bd'; 
    $headers = "From: $email";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully. Thank you!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    echo "Invalid request";
}
?>
