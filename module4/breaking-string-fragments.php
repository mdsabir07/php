<?php
$string = "Hello world,world How are you";
$string2 = "Quick brown fox jumps over the lazy dog";
$parts = explode(" ", $string);
// $parts = explode(",", $string);
// print_r($parts);

// echo PHP_EOL;
// $original = implode(" ", $parts); //Alias of join (join = implode)
// $original = join(" ", $parts);
// echo $original;

// $parts2 = str_split($string);
// print_r($parts2);
// $parts3 = strtok($string, " ,");
// while ($parts3 !== false) {
//     echo PHP_EOL . $parts3 . PHP_EOL;
//     $parts3 = strtok(" ,");
// }

// $parts4 = strtok($string2, " ");
// while ($parts4 !== false) {
//     echo $parts4 . PHP_EOL;
//     $parts4 = strtok(" ");
// }

$parts5 = preg_split("/ |,/",$string);
print_r($parts5);