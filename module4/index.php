<?php

// // $n = 12;
// $students = array("Rahim", "Karim", "Jobbar", 123, "Muhammed");

// $n = count($students);
// for($i=0; $i<$n; $i++) {
//     echo $students[$i]."\n";
// }


// echo "\n";
// for($i=$n-1; $i>=0; $i--)
// {
//     echo $students[$i]."\n";
// }

$students = ["Sazid", "Shahadat", "Siam", "Muhammed", 12345];
$students[2] = "Sabir";

// $n = count($students);
// for($i = 0; $i < $n; $i++) {
//     echo $students[$i]."\n";
// }

// echo "\n";
// echo "\n";

// array function 4
// array_shift(); //For data out (it's remove first element from array)
// array_unshift(); //For data entry (it's add a new first element to the array)
// array_pop(); //For data out (it's remove last element from array)
// array_push(); //For data entry (it's add a new last element to the array)

// $student = array_pop($students);
// $student = array_pop($students);
// $n = count($students);
// for($i = 0; $i < $n; $i++) {
//     echo $students[$i]."\n";
// }
// Output = 
// ==========
// Sazid
// Shahadat
// Sabir

// $student = array_shift($students);
// $student = array_shift($students);
// $n = count($students);
// for($i = 0; $i < $n; $i++) {
//     echo $students[$i]."\n";
// }
// Output = 
// ==========
// Sabir
// Muhammed
// 12345

// $student = array_pop($students);
// $student = array_shift($students);
// $n = count($students);
// for($i = 0; $i < $n; $i++) {
//     echo $students[$i]."\n";
// }
// Output = 
// ==========
// Shahadat
// Sabir
// Muhammed

// array_push(); (it's add a new last element to the array))
// $student = array_pop($students);
// $student = array_shift($students);

// $students[] = "Islam"; //or
// array_push($students, "Sabirul");
// $n = count($students);
// for($i = 0; $i < $n; $i++) {
//     echo $students[$i]."\n";
// }
/*
Output
=========
Shahadat
Sabir
Muhammed
Islam
Sabirul
*/

// array_unshift(); (it's add a new first element to the array)
// $student = array_pop($students);
// $student = array_shift($students);

// $students[] = "Islam"; //or
// array_push($students, "Sabirul");
// array_unshift($students, "Salam");
// array_unshift($students, "Salma");
// $n = count($students);
// for($i = 0; $i < $n; $i++) {
//     echo $students[$i]."\n";
// }
/*
Output
=========
Salma
Salam
Shahadat
Sabir
Muhammed
Islam
Sabirul
*/

// $str = " Hello World! ";
// echo trim($str);

