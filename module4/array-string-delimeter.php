<?php

// $vegetables = 'Brinjal, Tomato, Carrot, Capsicam, Brocolli';
/**
 * Making the string to array using explode()
 */
$vegetables = explode(', ', 'Brinjal, Tomato, Carrot, Capsicam, Brocolli');
// var_dump($vegetables);
// echo $vegetables[1];

/**
 * Get array elements as a string by join()
 */
$vegeString = join(', ', $vegetables);
echo $vegeString;