<?php

class Shape{

}

class Shapes{
    private $shapes;

    function __construct()
    {
        $this->shapes = array();
    }

    function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }

    function totalShapes(){
        return count($this->shapes);
    }
}

class Ractangle extends Shape{

}

class Sqare extends Shape {

}

class Student {

}

$currentShapes = new Shapes();
$currentShapes->addShape(new Ractangle());
$currentShapes->addShape(new Sqare());
$currentShapes->addShape(new Student());

echo $currentShapes->totalShapes();
