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
// while($i<10) {
//     $i++;
//     echo $i.PHP_EOL;
// }
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

$x = 12;
if(isEven($x)) {
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}

