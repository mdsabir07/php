<?php
class MathCalculator{
    private $number;
    static $name;

    static function fabonacci($n){
        echo self::$name."\n";
        self::DoSomething();
        echo "Fabonacci series up to {$n}\n";
    }

    static function DoSomething(){
        echo "Doing something\n";
    }
    
    function Factorial($n){
        self::$name = "Sabir\n";
        $this->number = 10;
        $this->DoSomething();
        self::DoSomething();
        echo "Factorial calculating of {$n}\n";
    }
}

$math = new MathCalculator();
$math->Factorial(8);

MathCalculator::fabonacci(5);
echo MathCalculator::$name;
