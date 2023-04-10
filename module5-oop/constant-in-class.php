<?php
// define("OK", 125);
// echo OK."\n";
// const CITY = "Comilla";
// echo CITY;

class MyClass{
    const CITY = "Comilla\n"; //const always static scope

    function sayHi(){
        echo "Hi from ".self::CITY;
    }
}

$m = new MyClass();
$m->sayHi();
// echo $m::CITY; //Or
echo MyClass::CITY;
