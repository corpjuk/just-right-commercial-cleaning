<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $rooms = htmlspecialchars($_POST['rooms']);
    $bathrooms = htmlspecialchars($_POST['bathrooms']);
    $facilityDescription = htmlspecialchars($_POST['facility-description']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@justrightcommercialcleaning.com";
    $subject = "New Contact Form Submission";
    $body = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Number of Classrooms/Rooms: $rooms\n
        Number of Bathrooms: $bathrooms\n
        Description of Facility: $facilityDescription\n
        Message: $message
    ";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
