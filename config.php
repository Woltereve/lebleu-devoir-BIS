<?php
$confirmation = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["nom"]);
    $email = trim($_POST["mail"]);
    $message = trim($_POST["message"]);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && $name !== "" && $message !== "") {

        $to = "ewolter@student.efp.be";
        $subject = "New message from the website";
        $body = "Name: $name\nEmail: $email\n\n$message";
        $headers = "Reply-To: $email";

        if (mail($to, $subject, $body, $headers)) {
            $confirmation = "Your message has been sent";
        } else {
            $confirmation = "Sorry, an error occurred. Please try again.";
        }

    } else {
        $confirmation = "Please fill in all fields with a valid email.";
    }
}