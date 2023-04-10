<?php
$filename = "/xampp/htdocs/php/module6/file/data/f2.txt";
if(is_writable($filename)){
// $existingData = file_get_contents($filename);
// $fp = fopen($filename, "w");
$fp = fopen($filename, "a"); //a append

// fwrite($fp, $existingData);
fwrite($fp, "Mercury\n");
fwrite($fp, "Neptune\n");
fwrite($fp, "Venus\n");
fclose($fp);
}