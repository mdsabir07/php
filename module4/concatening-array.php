<?php

$fruits = array('apple', 'banana', 'pineapple', 'mango', 'plum');
$random = array("a" => 2, "b" => 44, "c" => 23, "d" => 65, "e" => 87, 12=>61, "f" => 77);

// $newFruits1 = array_slice($fruits,0,3);
// $newFruits2 = array_slice($fruits,3);

// $newFruits = array_merge($newFruits1,$newFruits2);

// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

// $newFruitsPlus = $newFruits1 + $newFruits2;
// print_r($newFruitsPlus);


// $randomData = array_splice($random, 1, 3, array("j" => 54, "k" => 89));
// print_r($randomData);
// print_r($random);

$r1 = array_slice($random,0,2,true);
$r2 = array_slice($random,4,null,true);
$r3 = array("j" => 54, "k" => 89);
$randomDataCorrectWay = $r1+$r2+$r3;
print_r($randomDataCorrectWay);
print_r($random);
