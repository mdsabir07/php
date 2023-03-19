<?php
$numbers = range(40, 70);
// echo count($numbers);

// $random = mt_rand(0,30);
// echo $numbers[$random].PHP_EOL;
// $random = mt_rand(0,30);
// echo $numbers[$random].PHP_EOL;
// $random = mt_rand(0,30);
// echo $numbers[$random].PHP_EOL;
// $random = mt_rand(0,30);
// echo $numbers[$random].PHP_EOL;

$random = mt_rand(0, 30);
$luck = $numbers[$random];
if ($luck % 2 == 0) {
    echo "Head";
} else {
    echo "Tail";
}

shuffle($numbers);
print_r($numbers);

$randomNumber = $numbers[3];
echo $randomNumber;
