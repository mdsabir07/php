<!-- Task 1: HTML Basics -->
<h2>Task 1: HTML Basics</h2>
<form action="submit.php"method="post">
    <label for="name">Name <span>*</span></label>
    <input type="text" name="name" placeholder="Your name" required><br><br>
    <label for="email">Email <span>*</span></label>
    <input type="email" name="email" placeholder="Your email" required><br><br>
    <input type="submit" value="Submit">
</form>

<h2>Task 2: Basic OOP in PHP</h2>
<?php 
// Task 2: Basic OOP in PHP
class Persion{

    public $name;
    public $email;

    function getName() {
        echo "Name is {$this->name} <br>";
    }

    function getEmail() {
        echo "Email is {$this->email} <br>";
    }

}

$objName = new Persion();
$objName->name = "Muhammed";
$objName->getName();

$objEmail = new Persion();
$objEmail->email = "muhammed@gmail.com";
$objEmail->getEmail();
