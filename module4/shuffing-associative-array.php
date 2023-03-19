<?php
$fruits = array('a'=>'Arrya','b'=>'Berry','c'=>'Cherry','d'=>'Dates','e'=>'Egg');
// shuffle($fruits);
// print_r($fruits);
$key = array_rand($fruits);
// echo $key;
echo $fruits[$key];
