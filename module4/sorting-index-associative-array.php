<?php

// $fruits = array('apple', 'banana', 'pineapple', 'mango', 'plum', 'dates', 'orange');
// $numbers = array(4,65,38,6,34,55,7,77,3);
// sort($fruits); //small to big
// rsort($fruits); //big to small
// print_r($fruits);

// sort($numbers); //small to big
// rsort($numbers); //big to small
// print_r($numbers);

// $fruits = array('a'=>'apple', 'b'=>'banana', 'p'=>'pineapple', 'm'=>'mango', 'p'=>'plum', 'd'=>'dates', 'o'=>'orange');
// $numbers = array(4,65,38,6,34,55,7,77,3);

// asort($fruits); //small to big
// print_r($fruits);

// asort($numbers); //small to big
// print_r($numbers);

// $count = count($numbers);
// for($i=0;$i<$count;$i++) {
//     echo $numbers[$i]."\n";
// }

// foreach($numbers as $number) {
//     echo $number."\n";
// }

// arsort($numbers); //big to small
// foreach($numbers as $number) {
//     echo $number."\n";
// }

// $fruits = array('a'=>'apple', 'b'=>'banana', 'p'=>'pineapple', 'm'=>'mango', 'p'=>'plum', 'd'=>'dates', 'o'=>'orange');
// ksort($fruits);  //small to big
// print_r($fruits);
// foreach($fruits as $fruit) {
//     echo $fruit."\n";
// }

// krsort($fruits); //big to small
// print_r($fruits);
// foreach($fruits as $fruit) {
//     echo $fruit."\n";
// }

// SORT_STRING
// $numbers = array(1,11,54,7,45,3,77,8);
// sort($numbers, SORT_STRING);
// print_r($numbers);

// $random = array("apple","Apple","banana","Banana","Guava");
// sort($random); //sort always case sensitive
// print_r($random);

$random = array("apple","Apple","banana","Banana","Guava");
sort($random, SORT_STRING | SORT_FLAG_CASE); 
print_r($random);
