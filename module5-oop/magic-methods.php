<?php
class Student
{
    private $name;
    private $age;
    private $class;

    function __construct($name = '', $age = '', $class = '')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // Magic method
    function __get($ami)
    {
        return $this->$ami;
    }

    function __set($ami, $value)
    {
        $this->$ami = strtoupper($value);
    }

    // function getName()
    // {
    //     return $this->name;
    // }
    // function setName($name){
    //     $this->name = $name;
    // }

    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age){
    //     $this->age = $age;
    // }

    // function getClass(){
    //     return $this->class;
    // }
    // function setClass($class){
    //     $this->class = $class;
    // }

}

$s = new Student('Muhammed ', ' 1 ', ' 2');
// echo $s->getName();

$s->name = "Siam";
// echo $s->class;
// echo $s->age;
echo $s->name;
