<?php
$filename = "/xampp/htdocs/php/module6/file/data/f3.txt";
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

/*$fp = fopen($filename, "w");
foreach ($students as $student) {
    $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
    fwrite($fp, $data);
}
fclose($fp);*/

// $fp = fopen($filename, "w");
// foreach ($students as $student) {
//     // $data = sprintf("%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
//     // fwrite($fp, $data);
//     fputcsv($fp,$student);
// }
// fclose($fp);

// $fp = fopen($filename,"r");
// while($data = fgets($fp)){
//     $student = explode(",",$data);
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);

/*$fp = fopen($filename,"r");
while($student = fgetcsv($fp)){
    // $student = explode(",",$data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}
fclose($fp);*/

// $student = array(
//     'fname' => 'Muhammed',
//     'lname' => 'Siam',
//     'age'   => 7,
//     'class' => 1, 
//     'roll'  => 4
// );

// $fp = fopen($filename,"a");
// fputcsv($fp,$student);
// fclose($fp);


$data = file($filename);
unset($data[1]);
print_r($data);
$fp = fopen($filename,"w");
foreach($data as $line){
    fwrite($fp,$line);
}
fclose($fp);

