<?php
$person = array('fname'=>'Sabirul','lname'=>'Islam');
// $person2 = $person; //copy by value or deep copy
// $person2['fname'] = 'Muhammed';

// print_r($person);
// print_r($person2);


$person2 = &$person; //copy by reference or shallow copy
$person2['fname'] = 'Muhammed';

print_r($person);
print_r($person2);
echo "\n \n";
function printData($person) {
    $person['fname'] .= ' Changed';
    print_r($person);
}
printData($person);
print_r($person);

echo "\n \n";
function printData2(&$person) {
    $person['fname'] .= ' Changed';
    print_r($person);
}
printData2($person);
print_r($person);