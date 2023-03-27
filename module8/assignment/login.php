
    <?php
        // Start session
        session_start();

        // Check if the form was submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Check if both fields are filled in
            if (empty($email) || empty($password)) {
                // Display error message
                $_SESSION["error"] = "Please enter your email address and password.";
                header("Location: login.php");
                exit;
            } else {
                // Validate login credentials
                // (replace this with your own code to validate the credentials)
                if ($email == "user@example.com" && $password == "password123") {
                    // Successful login, set session variable for first name and redirect to welcome page
                    $_SESSION["first_name"] = "Sabir"; // replace with actual first name
                    header("Location: welcome.php");
                    exit;
                } else {
                    // Invalid login credentials, display error message
                    $_SESSION["error"] = "Invalid email address or password.";
                    header("Location: login.php");
                    exit;
                }
            }
        }
    ?>