<?php
$filename = "/xampp/htdocs/php/module6/file/data/f2.txt";
// $fp = fopen($filename, "r+"); // 'r+' read and write mode and remain existing content of the file. file cursor will be top
// $line = fgets($fp);
// echo $line;
// fwrite($fp, "Urenus\n");
// $line = fgets($fp);
// echo $line;
// fseek($fp,0); //or rewind($fp)
// fwrite($fp,"Earth\n");
// fclose($fp);

// $fp = fopen($filename, "w+"); // 'r+' read and write mode and remain existing content of the file. file cursor will be top
// fwrite($fp, "Urenus\n");
// rewind($fp);
// fwrite($fp, "Pluto\n");
// $line = fgets($fp);
// echo $line;

$fp = fopen($filename, "a+"); // 'r+' read and write mode and remain existing content of the file. file cursor will be top
fwrite($fp, "Urenus\n");
rewind($fp);
fwrite($fp, "Pluto\n");
$line = fgets($fp);
echo $line;
