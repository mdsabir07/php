<?php
$string = "Quick Brown brown Fox fox jumps over the lazy dog";
/**
 * str_replace() case sensitive
 */
// $replaceString = str_replace("brown", "red", $string);
// echo $replaceString;
// echo PHP_EOL;

/**
 * str_ireplace() not case sensitive
 */

// $replaceString2 = str_ireplace("brown", "red", $string);
// echo $replaceString2 . PHP_EOL;

/**
 * count total replacement word using str_replace() and str_ireplace()
 */
// $replaceCount = str_replace("brown", "blue", $string, $count);
// $replaceCount = str_ireplace("brown", "blue", $string, $count);
// echo $replaceCount;
// echo PHP_EOL;
// echo "Total replacement: {$count}";

/**
 * multiple words replacement using array()
 */
$multipleReplace = str_replace(array("brown", "fox"), array("red", "blue"), $string, $count);
$multipleReplace = str_ireplace(array("brown", "fox"), array("red", "blue"), $string, $count);
echo $multipleReplace;
echo PHP_EOL;
echo "Total replacement: {$count}";
