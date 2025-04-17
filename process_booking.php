<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room = $_POST['room'];

    // Set the recipient email address (your email address)
    $to = "vinuthgowda85@gmail.com";  // Replace with your email
    $subject = "New Booking Request from " . $name;

    // Prepare the message body
    $message = "
    Name: $name\n
    Email: $email\n
    Room: $room\n
    Check-in Date: $checkin\n
    Check-out Date: $checkout\n
    ";

    // Send the email
    $headers = "From: no-reply@yourdomain.com"; // Change this to your domain or email
    if (mail($to, $subject, $message, $headers)) {
        // Confirmation message if the email was sent successfully
        echo "Booking request submitted successfully!";
    } else {
        // Error message if the email could not be sent
        echo "There was an error sending your booking request. Please try again later.";
    }
}
?>
