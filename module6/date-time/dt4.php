<?php
/*
echo mktime(0,0,0,05,25,1986)."\n";
echo strtotime("25 May, 1986")."\n";
echo time()."\n";
echo strtotime("now")."\n";
echo strtotime("+3days")."\n";
echo (strtotime("+7days")-strtotime("now"))/(86400)."\n";
echo (strtotime("+2weeks 7days")-strtotime("now"))/(86400)."\n";
echo (strtotime("+2 weeks 7 days 24 hours")-strtotime("now"))/(86400)."\n";
echo (strtotime("+2 weeks 7 days 24 hours 86400 seconds")-strtotime("now"))/(86400)."\n";
echo (strtotime("+2months 7days")-strtotime("now"))/(86400)."\n";
echo (strtotime("+3years 7days")-strtotime("now"))/(86400)."\n";
echo date("H:i:s A",strtotime("14 October 2021 21:15:05"))."\n"; //Date of birth of Muhammed
*/

// date_diff or diff
$d1 = new DateTime('01 July 1986');
$d2 = new DateTime('25 May 2023');
// $difference = date_diff($d1,$d2);
$difference = $d1->diff($d2);
echo $difference->format('%y Year %m Month %d Days'); //my age

echo "\n";

$d1 = new DateTime('14 October 2021');
$d2 = new DateTime('25 May 2023');
$difference = date_diff($d1,$d2);
// $difference = $d1->diff($d2);
echo $difference->format('%y Year %m Month %d Days'); //The age of Muhammed