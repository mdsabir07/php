<?php
class DistCollect implements IteratorAggregate{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    // function getDistricts(){
    //     return $this->districts;
    // }

    public function getIterator(){
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistCollect();
$districts->add("Dhaka");
$districts->add("Comilla");
$districts->add("Feni");
$districts->add("Bogra");

foreach($districts as $district){
    echo $district."\n";
}