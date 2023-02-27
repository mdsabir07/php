<?php
$extractdata = array('apple', 'banana', 'mango', 'orange', 'dates', 'plum');

// $someDatas = array_slice($extractdata,1);
// $someDatas = array_slice($extractdata,3,2);
// $someDatas = array_slice($extractdata,-5,-1);
// $someDatas = array_slice($extractdata,3,3,true);
// print_r($someDatas);
$random = array("a" => 4, "b" => 33, "c" => 65, "d" => 23, "e" => 88, 92 => 55, "f" => 53, "g" => 44);
// $randomData = array_slice($random,3);
// $randomData = array_slice($random,3,null,true);
$randomData = array_slice($random, -3, -1, true);
print_r($randomData);
