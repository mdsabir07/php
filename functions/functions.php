<?php
/**
 * Determines if the argument is even or odd
 */
function isEven($n) { //Parameter
    if($n % 2 == 0) {
        return true;
    }
    return false;
}

function factorial(int $n) {
    if(gettype($n != "integer")) {
        return "invalid";
    }
    $result = 1;
    for($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

function serve($foodType = "Coffee", $nOfItems="2 cups") {
    echo "{$nOfItems} of {$foodType} have/has been served.";
}


