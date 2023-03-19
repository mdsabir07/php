<?php
$name = "Muhammed Bin Sabir 01712766962 sabir@sabir.com";
$parts = sscanf($name, "%s %s %s %11s %s");
// echo $parts;
print_r($parts);

sscanf($name, "%s %s %s %11s %s", $fname, $mname, $lname, $mobile, $email);
echo $email;
echo PHP_EOL;

$hexColor = "#FF2F33";
sscanf($hexColor,"#%2x%2x%2x",$red,$green,$blue);
echo $red;