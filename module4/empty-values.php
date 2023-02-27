<?php
$name =5;
if(isset($name)) {
    echo "Name is set";
} else {
    echo "Name is not set";
}


echo "</br>";
if(empty($name)) {
    echo "Name is empty";
} else {
    echo "Not empty";
}
echo "</br>";
echo "</br>";


if(isset($name) && (is_numeric($name) || $name != '')) {
    echo "Name is set and it's not empty";
} else {
    echo "Name is either not set or it's empty";
}