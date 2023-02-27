<?php
$student = array(
    'fname' => 'Sabirul',
    'lname' => 'Islam',
    'age'   => 35,
    'class' => 9,
    'section'  => 'B'
);

// print_r($student);
// echo $student['fname']." ".$student['lname']."\n";
// printf("%s %s \n", $student['fname'],$student['lname']);
// echo join(" ",$student);

echo serialize($student)."\n \n";

$serialized = serialize($student);
$newstudent = unserialize($serialized);

print_r($newstudent);

$jsondata = json_encode($student);
echo "\n".$jsondata."\n \n";

$jsondata2 = json_decode($jsondata, true);
print_r($jsondata2)."\n \n";
