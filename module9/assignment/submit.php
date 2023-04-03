<?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Check if all fields are filled in
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            echo "<p>Please fill in all fields.</p>";
        } else {
            // Check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>Please enter a valid email address.</p>";
            } else {
                echo "<p>Thank you for submitting, $name!</p>";
            }
        }
    }
