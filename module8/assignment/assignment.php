<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="first-name">First Name:</label>
		<input type="text" id="first-name" name="first-name" required><br>

		<label for="last-name">Last Name:</label>
		<input type="text" id="last-name" name="last-name" required><br>

		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>

		<label for="confirm-password">Confirm Password:</label>
		<input type="password" id="confirm-password" name="confirm-password" required><br>

		<input type="submit" value="Register">
	</form>

</body>
</html>
      