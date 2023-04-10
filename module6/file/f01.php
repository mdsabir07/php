<?php
$filename = "/xampp/htdocs/php/module6/file/data/f1.txt";
if (is_readable($filename)) {
    $fp = fopen($filename, 'r');
    // $line = fgets($fp);
    // // $line = fgets($fp,6);
    // echo $line;

    while ($line = fgets($fp)) {
        echo $line;
    }
    echo PHP_EOL;
    echo PHP_EOL;

    // rewind($fp); //Loop start again by rewind($fp)
    // fseek($fp,5); //Loop starting possition by fseek()
    // fseek($fp,-1,SEEK_END); //Cursor last possition

    // while($line = fgets($fp,5)){
    //     echo $line."-";
    // }
    fclose($fp);

    // reading all line and showing them as a array
    $data = file($filename);
    echo $data[2]; //See 3 number line
    print_r($data);

    // Only reading full file lines
    $data2 = file_get_contents($filename);
    echo $data2;
}
