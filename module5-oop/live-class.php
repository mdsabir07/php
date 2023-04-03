<?php

// class Product{

//     // property
//     public $ProductPrice="100tk";

//     // Constrcutor is one kind of magic method
//     function __construct($name) { //parameterized constructor
//         echo $name;
//     }

//     public function ProductCatList(){
//         $CatList = array("A","B","C");
//         print_r($CatList);
//     }

//     static function ProductCategoryList(){
//         $CatList = array("A","B","C");
//         print_r($CatList);
//     }
// }

// $obj = new Product("Muhammed is good boy");
// echo PHP_EOL;
// $obj->ProductCatList();
// Product::ProductCategoryList();

/**
 * Inheritance
 */
// class Father{

//     // function BankDeposit(){
//     //     echo "50000000";
//     // }
//     static function BankDeposit(){
//         echo "50000000";
//     }

// }
// abstract class Father{

// function BankDeposit(){
//     echo "50000000";
// }
//     static function BankDeposit(){
//         echo "50,000,000";
//     }

// }

// class Son extends Father{

// function BankDeposit()
// {
//     echo "40000000";
// }

// }

// $obj = new Son();
// $obj->BankDeposit();
// Son::BankDeposit();

// interface ProductInterface{

//     public function ProductList();

//     public function ProductCategory();

//     public function ProductBrand();

//     public function ProductTag();

//     public function ProductCart();

//     public function ProductCheckout();
// }

// class Product implements ProductInterface {

//     public function ProductList(){

//     }

//     public function ProductCategory(){

//     }

//     public function ProductBrand(){

//     }

//     public function ProductTag(){

//     }

//     public function ProductCart(){

//     }

//     public function ProductCheckout(){

//     }
// }

class Ractangle
{
    // public $height;
    // public $width;

    // function __construct($width, $height)
    // {
    //     $this->width = $width;
    //     $this->height = $height;
    // }

    // function __construct(public $width, public $height) //Property promotion from version 8 (PHP)
    function __construct(public $width = 10, public $height = 2) //Property promotion from version 8 (PHP)
    {
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
}

$r = new Ractangle(9, 5);
// $r->height = 5;
// $r->width = 8;

$area = $r->getArea();
echo $area;

echo "\n";
class Circle
{

    const PI = 3.14;
    function __construct(public $radius)
    {
    }

    function getArea()
    {
        return self::PI * $this->radius * $this->radius;
    }
}

$c = new Circle(4);
$area = $c->getArea();
echo $area;

echo "\n";

// inheritence
class Vehicle
{

    // Encapsulation
    function move()
    {
    }
    function start()
    {
        echo "Started";
    }
    function stop()
    {
        echo "Stoped";
    }
    function honk()
    {
    }
}

class Car extends Vehicle
{
    function move()
    {
        echo "Car moving at 100kmph";
    }
}

class Truck extends Vehicle
{
    function move()
    {
        echo "Truck moving at 60kmph";
    }
}

class Cycle extends Vehicle
{
    function move()
    {
        echo "Cycle moving at 20kmph";
    }

    function start()
    {
        echo "Cycle started";
    }

    function honk()
    {
        echo "Cycle honk cring cring";
    }
}

// $c = new Car();
// $c->move();
// echo "\n";

// $t = new Truck();
// $t->move();
// echo "\n";

// $cy = new Cycle();
// $cy->move();
// echo "\n";
// $cy->start();
// echo "\n";
// $cy->honk();

class MathHelper
{
    public static function Square($n)
    {
        return $n * $n;
    }

    public static function Cube($n)
    {
        return $n * $n * $n;
    }
}
$sq = MathHelper::Square(3);
echo $sq;
echo "\n";

$cu = MathHelper::Cube(4);
echo $cu;

// Polymerphisom method
interface Shape
{
    function getArea();
}

class RactangleS implements Shape
{
    function getArea()
    {
    }
}

class CircleS implements Shape
{
    function getArea()
    {
    }
}

class Triangle implements Shape
{
    function getArea()
    {
    }
}
echo "\n";
class Person{
    function __construct(public $title, public $name)
    {
        
    }

    function whoAreYou(){
        echo "{$this->title} {$this->name}";
    }
}
$p = new Person("Mr.", "Jhon Doe");
$p->whoAreYou();
echo "\n";
(new Person("Mr.", "John Doe"))->whoAreYou(); //PHP versoin 8

echo "\n";

/**
 * Design paterns are Facade, Factory, Singleton
 * 
 * @singleton
 */
class Payment{
    static $instance;
    public static function getInstance(){
        if(self::$instance===null){
            self::$instance = new Payment();
        }

        return self::$instance;

    }
    function processPayment(){
        echo "Payment processed";
    }
}

$p1 = Payment::getInstance();
$p1->processPayment();