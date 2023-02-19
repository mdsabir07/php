<?php

// Modiule one
// =================
// Ternary operator
// How can you use the ternary operator in PHP to shorten this if statement?
// $num = 5;
// Using if statement
// if ($num > 0) {
// $result = 'positive';
// }
// if ($num < 0) {
// $result = 'negative';
// if( $num < -10) {
// $result = 'value is below -10';
// }
// }
// else {
// $result = 'its zero';
// }
// echo "\n";

// $inWordResult = (0 < $num) ? "Positive" : "Negative";
// $inWordResult = (0 > $num) ? "Positive" : "Negative";
// $inWordResult = (-10 > $num) ? "Value is below -10" : "its zero";

// echo $inWordResult;

// echo "Hello world";
// echo PHP_EOL;
// $timeNow = 12.6;

// echo $timeNow;
// echo "\n";
// $myLaptop = "Huawei";

// var_dump($timeNow, $myLaptop);
// for($x=1; $x<12; $x++) {
    // echo $x;
//     echo PHP_EOL;
//     for($j=0; $j<$x; $j++) {
//         echo "*";
//     }
// }

// $i = 0;
// while($i < 100) {
//     $i++;
//     echo $i."+";
// }

// function fun($x,$y){
//     $x=4;
//     $y=3;
//     $z=$x+$y/$y+$x;
//     echo $z;
// }
// fun(3,4);

// $foo = function ($x) { return $x * 2;};
// $bar = function ($x) use ($foo) {
//     return $foo($x) + 1;
// };
// echo $bar(5);

// function strFunc($str) {
//     if (strlen($str) == 0) {
//         return "";
//     } else {
//         return strFunc(substr($str, 1)) . substr($str, 0, 1);
//     }
// }
// echo strFunc("hello");

// $numbers = array(1, 2, 3, 4, 5);
// $sum = 0;
// foreach  ($numbers as $number) {
//     if ($number % 2 ==0) {
//         continue;
//     }
//     $sum += $number;
// } 
// echo $sum;

// $numbers = array(1, 2, 3, 4, 5);



// function testProducts($pr) {
//     echo "{$pr['name']} - {$pr['price']} </br>";
// }

// function newName($name="Sabirul", $title="Islam") {
//     echo "{$name} {$title}<br/>";
// }

// newName("Sabirul", "");

// function unlimitedArgument(...$n1) {
//     echo count(func_get_args());
// }
// unlimitedArgument(1,2,3,4,5,6,7,8,9,12,44,67);

// $data = 12;
// function functionVariable() {
//     global $data;

//     $data +=3;
//     echo $data;
// }
// functionVariable();

// function visit() {
//     static $visit = 0;
//     $visit++;
//     echo $visit."\n";
// }
// visit();
// visit();
// visit();
// visit();

// function displayProfile($name, $gender, $title="Mr.") {
//     echo "{$title} {$name}, $gender \n";
// }
// displayProfile("Sabir", "Ahmed");
// displayProfile(gender:"M", name:"Sabir");

// echo str_repeat("*", 64);
// $name = "Sabirul Islam";
// $parts = explode(" ", $name);
// echo $parts[0];
// echo "\n";
// echo $parts[1];


// echo PHP_EOL;
// $n = 0;
// do{
//     $n++;
//     echo $n.PHP_EOL;
// }while($n<10);

// echo PHP_EOL;

// $d = 0;
// a: $d++;
// echo $d.PHP_EOL;
// if($d<10) goto a;

// for($i=10; $i>0; $i--) {
//     echo $i.":".(10-$i).PHP_EOL;
// }
// echo PHP_EOL;
// echo "multiple variable assigned";
// for($i=10, $j=0; $i>0; $i-=1, $j++){
//     echo $i.":".$j;
//     echo PHP_EOL;
// }

// $x = 0;
// while($x<=5){
//     echo $x;
//     echo PHP_EOL;
//     $x++;
// }

// echo "======= \n";
// $i = 0;
// while($i++ <5){
//     echo $i;
//     echo PHP_EOL;
// }
// echo "========== \n";

// $j = 0;
// while(++$j <5) {
//     echo $j;
//     echo PHP_EOL;
// }
// echo "============\n";

// $x = $y = 6;
// $x = ++$y;
// echo $x.":".$y;

// for($i=2; $i<30; $i++) {
    // echo $i.PHP_EOL;

    // if($i % 13 == 0) {
    //     echo $i.PHP_EOL;
    //     break;
    // }

    // if($i + 4 == 0) {
    //     echo $i.PHP_EOL;
    //     break;
    // }

    // if($i>17) {
    //     continue;
    // }
    // echo $i.PHP_EOL;

    // if($i < 15) {
    //     goto a;
    // }
    // echo $i.PHP_EOL;

    // a: ' ';

// }


// $anticipate = 0;
// $past = 1;
// $present = 1;

// for($i=0; $i<15; $i++) {
//     echo $anticipate." ";
//     $past = $present;
//     $present = $past + $anticipate;
//     $anticipate = $past;
// }

require_once 'functions.php';

// $x = 12;
// if(isEven($x)) { //Argument
//     echo "{$x} is an even number";
// } else {
//     echo "{$x} is an odd number";
// }

// $x = 3;
// echo "Factorial of {$x} is ".factorial($x);


// serve("Rice", "1 plate");

// function sum(int $x, int $y, int $z):int {
//     return $x+$y+$z;
// }
// echo sum(1,7,8);


// function unlimitedArgument(int ...$numbers):int {
//     $result = 0;
//     for($i=0; $i<count($numbers); $i++) {
//         $result += $numbers[$i];
//     }
//     return $result;
// }
// echo unlimitedArgument(3,2,4,5,3,1,723,3,5);

// Recursive function // recursion
// function printNumber($counter, $end, $stepping=1) {
//     if($counter>$end) {
//         return;
//     }
//     echo $counter."\n";
//     $counter += $stepping;
//     printNumber($counter, $end, $stepping);
// }
// printNumber(14, 34, 2);



