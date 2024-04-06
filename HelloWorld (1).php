<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $idea = $_POST["idea"];
    
    // Email settings
    $to = "ayushd172005@gmail.com"; // Your Gmail address
    $subject = "New Startup Idea Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nStartup Idea:\n$idea";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Your startup idea has been submitted successfully. We'll be in touch soon!</p>";
    } else {
        echo "<p>There was an error submitting your startup idea. Please try again later.</p>";
    }
}
?>
