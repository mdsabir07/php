<?php

$fruits = array('a'=>'apple', 'b'=>'banana', 'p'=>'pineapple', 'm'=>'mango', 'p'=>'plum', 'd'=>'dates', 'o'=>'orange');
$numbers = array(4,65,38,6,34,"55",7,77,3);

// if(in_array(87,$numbers)) {
//     echo "3 is found";
// } else {
//     echo "Not found";
// }

if(in_array(55,$numbers,true)) { //type check it's int or string
    echo "3 is found \n";
} else {
    echo "Not found \n";
}

// check position 
$offset = array_search(55,$numbers);
echo $offset."\n";

// checking key
if (key_exists('bb',$fruits)) {
    echo "key b found";
} else {
    echo "Not found \n";
}
