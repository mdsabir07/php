<?php
// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
function customSortingFunction($a, $b) {
    if ($a == $b)
        return 0;
    else if ($a > $b)
        return 1;
    else
        return -1;
}
$array = array(45, 6, 21, 34, 76);
usort($array, 'customSortingFunction');
foreach ($array as $key => $value) {
    echo "$key: $value\n";
}
// output
// =======
// 0: 6
// 1: 21
// 2: 34
// 3: 45
// 4: 76


// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
$firstName = 'Sabirul';  
$lastName = 'Islam';  

$fullName = $firstName." ".$lastName;  
echo $fullName."\n";  
// output
// ========
// Sabirul Islam


// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
$students = ["Sazid", "Shahadat", "Siam", "Muhammed", 12345];
$student = array_pop($students);
$student = array_shift($students);
$n = count($students);
for($i = 0; $i < $n; $i++) {
    echo $students[$i]."\n";
}
// output
// ========
// Shahadat
// Siam
// Muhammed

// 4.Write a PHP function to check if a string contains only letters and whitespace.
$str = " Hello World! ";
echo trim($str);
// output
// ==========
//     Hello World!


// 5.Write a PHP function to find the second largest number in an array of numbers.
// $number = array(20, 520, 52, 755, 75, 15, 561, 656, 765);
// $max = $number[0];
// $smax;
// $count = count($number);
// for($i=1; $i<$count; $i++){
// 	if($number[$i]>$max){
// 		$smax = $max;
// 		$max = $number[$i];
// 	}else if($smax<$number[$i] && $smax < $max){
// 		$smax = $number[$i];
// 	}
// }
// echo $smax;
// OutPut = 755
