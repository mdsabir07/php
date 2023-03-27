<?php
		// Check if the form was submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Get form data
			$first_name = $_POST["first-name"];
			$last_name = $_POST["last-name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm-password"];

			// Check if all fields are filled in
			if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<p>Please fill in all fields.</p>";
			} else {
				// Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "<p>Please enter a valid email address.</p>";
				} else {
					// Check if password and confirm password match
					if ($password != $confirm_password) {
						echo "<p>Passwords do not match.</p>";
					} else {
						// All validation passed, display confirmation message
						echo "<p>Thank you for registering, $first_name $last_name!</p>";
					}
				}
			}
		}
	?>