<?php
$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14);

// function sum($oldValue, $newValue){
//     return $oldValue+$newValue;
// }
// $sum = array_reduce($numbers, 'sum',1);
// echo $sum;

// জোড় সংখ্যাগুলো কে রিটার্ন করা
function sum($oldValue, $newValue){
    if($newValue%2==1){
        return $oldValue+$newValue;
    }
    return $oldValue;
}
$sum = array_reduce($numbers, 'sum');
echo $sum;