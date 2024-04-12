<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $idea = $_POST["idea"];

    // Validate and sanitize form data (you may need more validation)
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $phone = preg_replace("/[^0-9]/", "", $phone); // Remove non-numeric characters from phone number

    // Process the form data (e.g., store it in a database, send an email, etc.)
    // Here, we'll simply print the collected data
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Idea: $idea";
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    exit();
}
?>
