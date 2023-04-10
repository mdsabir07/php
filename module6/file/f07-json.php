<?php
$filename = "/xampp/htdocs/php/module6/file/data/f5.txt";
$students = array(
    array(
        'fname' => 'Sabirul',
        'lname' => 'Islam',
        'age'   => 35,
        'class' => 8,
        'roll'  => 12
    ),
    array(
        'fname' => 'Abdur',
        'lname' => 'Rahim',
        'age'   => 23,
        'class' => 8,
        'roll'  => 10
    ),
    array(
        'fname' => 'Muhammed',
        'lname' => 'Salam',
        'age'   => 16,
        'class' => 8, 
        'roll'  => 8
    ),
);

$encodeData = json_encode($students);
file_put_contents($filename,$encodeData,LOCK_EX);