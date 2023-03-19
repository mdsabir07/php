<?php
// $numbers  = array(12,13,14,15,16,17,18,19,20,21);
// $numbers = array();
// for ($i = 12; $i < 21; $i++) {
//     array_push($numbers, $i);
// }
// print_r($numbers);

// $numbers = range(11,25);
// print_r($numbers);

// stepping
// $numbers = range(11, 25, 3);
// print_r($numbers);

// foreach (range(14, 24, 3) as $evenNumber) {
//     echo $evenNumber . PHP_EOL;
// }

foreach (range(0, 60, 9) as $number) {
    if ($number > 0) {
        echo $number . PHP_EOL;
    }
}
