<?php
$string = "Quick brown Fox fox jumps over the lazy dog";
// echo strpos($string, "jumps"); //strpos case sensitive
echo stripos($string, "Fox", 13); //strpos case sensitive na
echo PHP_EOL;

// $offset = strpos($string, "Quick");
// if ($offset !== false) {
//     echo "\nWord was found\n";
// } else {
//     echo "\nword wasn't found\n";
// }

$offset = strrpos($string,"Fox");
echo $offset;
