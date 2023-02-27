<?php
class Human{
    public $name;
    function sayHi() {
        echo "Salam\n";
        $this->sayName();
    }

    function sayName() {
        echo "{$this->name} is my son \n";
    }
}

class Cat{
    function sayHi() {
        echo "Meow\n";
    }
}

class Dog{
    function sayHi() {
        echo "Woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Muhammed"; // This is a set method
$h2->name = "Siam"; // This is a set method

$h1->sayHi();
$h2->sayHi();
// $h1->sayName();
// echo $h1->name; // this is a get method

$c1 = new Cat();
$d1 = new Dog();


