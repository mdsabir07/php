<?php

$fruits = array('apple', 'banana', 'pineapple', 'mango', 'plum');
$random = array("a" => 2, "b" => 44, "c" => 23, "d" => 65, "e" => 87, "f" => 77);

// $someFruits = array_splice($fruits,2,2);
$newFruits = array('Jackfruits', 'Guava');
$someFruits = array_splice($fruits, -5, 3, $newFruits);

print_r($someFruits);
print_r($fruits);