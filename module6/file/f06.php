<?php
$filename = "/xampp/htdocs/php/module6/file/data/f4.txt";
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

// $data = serialize($students);
// file_put_contents($filename,$data,LOCK_EX);

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename,$data,LOCK_EX);