<?php
$name = "Muhammed";

$string01 = 'His name is $name \n \tthan tab\n';
$string02 = "\nHis name is $name \n \tthan tab\n";
echo $string01;
echo $string02;

$heardoc = <<<EOD
$name is 18 months old.
His name is $name;
I don't want to share more details about $name.
EOD;
echo $heardoc;
