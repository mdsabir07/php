<?php
session_start([
  'cookie_lifetime' => 300,
]);
$error = false;
// session_destroy();

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

$fp = fopen("./data/users.txt", "r");
if ($username && $password) {
  $_SESSION['loggedin'] = false;
  $_SESSION['user'] = false;
  $_SESSION['role'] = false;
  while ($data = fgetcsv($fp)) {
    if ($data[0] && $data[1] == sha1($password)) {
      $_SESSION['loggedin'] = true;
      $_SESSION['user'] = $username;
      $_SESSION['role'] = $data[2];
      header('location:index.php');
    } 
  }
  if(!$_SESSION['loggedin']){
    $error = true;
  }
}

if (isset($_GET['logout'])) {
  $_SESSION['loggedin'] = false;
  $_SESSION['user'] = false;
  $_SESSION['role'] = false;
  session_destroy();
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    form {
      border: 3px solid #f1f1f1;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .container {
      padding: 16px;
    }

    span.password {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.password {
        display: block;
        float: none;
      }
    }
  </style>
</head>

<body>

  <h2>Login Form</h2>
  <?php
  // echo md5("rabbit")."<br/>";
  // echo sha1("rabbit")."<br/>";
  if (true == $_SESSION['loggedin']) {
    echo "Hello Admin, Welcome!";
  } else {
    echo "Hello stranger, Login below";
  }
  if ($error) {
    echo "<blockquote>Username and Password didn't match.</blockquote>";
  }
  if (false == $_SESSION['loggedin']) :
  ?>
    <form method="POST">
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        <button type="submit" name="submit">Login</button>
      </div>
    </form>
  <?php else : ?>
    <form action="login.php" method="POST">
      <div class="container">
        <input type="hidden" name="logout" value="1">
        <button type="submit" name="submit">Log Out</button>
      </div>
    </form>
  <?php endif; ?>
</body>

</html>