<?php
$numbers = array(4, 54, 66, 45, 3, 7, 2, 44, 6453, 78);

// array_walk
function square($n)
{
    printf("Square of %d is %d \n", $n, $n * $n);
}
// array_walk($numbers, "square");

// array_map()
function cube($n)
{
    return $n * $n * $n;
}
// print_r($numbers);
// $arrayMap = array_map('cube', $numbers);
// print_r($arrayMap);

// array_filter()
// function even($n){
//     return $n%2==0;
// }
// $arrayFilter = array_filter($numbers, 'even');
// print_r($arrayFilter);

function odd($n)
{
    return $n % 2 == 1;
}
$arrayFilter = array_filter($numbers, 'odd');
print_r($arrayFilter);

$persons = array('Sabir', 'sazid', 'shahadat', 'siam', 'shafiq', 'muhammed', 'ahmed');
function filterByS($name){
    return $name[0]=='a';
}
$newPersons = array_filter($persons, 'filterByS');
print_r($newPersons);