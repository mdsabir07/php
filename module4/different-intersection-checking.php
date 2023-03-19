<?php

$fruits1 = array('be'=>'berry', 'b'=>'banana', 'p'=>'pineapple', 'm'=>'mango', 'd'=>'dates', 'o'=>'orange');
$fruits2 = array('a'=>'apple', 'b'=>'banana', 'j'=>'jackfruit', 'm'=>'mango', 'p'=>'plum', 'd'=>'dates', 'o'=>'orange');
$numbers1 = array(4,65,38,6,34,55,7,77,3);
$numbers2 = array(52,3,54,65,78,25,6,7,98,12);

// Find out common elements
$comon = array_intersect($numbers1,$numbers2); 
// print_r($comon);
// Find out common elements
$comonf = array_intersect($fruits1,$fruits2); 
// print_r($comonf);
// check including key
$comonfa = array_intersect_assoc($fruits1,$fruits2); 
// print_r($comonfa);

// Find out different elements
// $diff = array_diff($numbers1,$numbers2);
$diff = array_diff($numbers2,$numbers1);
$difff = array_diff($fruits1,$fruits2);
print_r($diff);
// find out including key
$diffk = array_diff_assoc($fruits1,$fruits2);
print_r($diffk);
