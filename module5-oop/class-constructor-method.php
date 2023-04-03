<?php
class Human
{

    public $name;
    public $age;

    function __construct($personName, $personAge = 0)
    {
        // echo "New human object created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }
    function sayHi()
    {
        // echo "Salam\n";
        $this->sayName();
    }

    function sayName()

    {
        if ($this->age) {
            echo "My name is {$this->name} I'm {$this->age} years old\n";
        } else {
            echo "My name is {$this->name} I don't know how old I am.\n";
        }
    }
}

$h1 = new Human("Muhammed", 2);
$h2 = new Human("Sabir", 35);
$h3 = new Human("Sajid");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
