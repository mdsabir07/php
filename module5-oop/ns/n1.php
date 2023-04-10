<?php
namespace Project;

include "c1.php";
include "c2.php";

use \Project\MotorCycle\Bike as Honda;

$b = new MotorCycle\Bike();
echo $b->getName();
echo PHP_EOL;
$h = new Honda();
echo $h->getName();