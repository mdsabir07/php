<?php
abstract class Shape
{
    abstract function getArea();
    abstract function getPerimeter();
}

class Ractangle extends Shape
{

    private $base, $height;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    public function setBase($base)
    {
        $this->base = $base;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    function getArea()
    {
        return $this->base * $this->height;
    }

    function getPerimeter()
    {
        
    }
}

class Triangle extends Shape{
    function getArea()
    {
        return $this->base * $this->height;
    }

    function getPerimeter()
    {
        
    }
}

$triangle = new Ractangle(2,5);
echo $triangle->getArea()."\n";




abstract class OurClass{
    function sayHi(){
        echo "Hi\n";
    }

    abstract function eat($n);
}

class myClass extends OurClass{
    function eat($x)
    {
        echo "I'm learning\n";
    }
}

$mc = new myClass();
$mc->sayHi();
$mc->eat(2);
