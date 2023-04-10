<?php
class DistCollect implements IteratorAggregate, Countable
{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district)
    {
        array_push($this->districts, $district);
    }

    // function getDistricts(){
    //     return $this->districts;
    // }

    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }

    function count()
    {
        return count($this->districts);
    }
}

$districts = new DistCollect();
$districts->add("Dhaka");
$districts->add("Comilla");
$districts->add("Feni");
$districts->add("Bogra");
$districts->add("Sylhet");

echo count($districts);
