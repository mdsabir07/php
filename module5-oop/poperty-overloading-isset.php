<?php
class MotorCycle{
    private $parameters;

    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    // function getDisplacement(){
    //     return $this->parameters['displacement'];
    // }

    // function setDisplacement($displacement){
    //     $this->parameters['displacement'] = $displacement;
    // }

    function __isset($name)
    {
        if(!isset($this->parameters[$name])){
            echo "{$name} not found\n";
            return false;
        }
        return true;
    }

    function __unset($name)
    {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __get($name)
    {
        echo $this->parameters[$name]; // $this->displacement
    }

    function __set($name, $value)
    {
        echo $this->parameters[$name] = $value;
    }
}

$mc = new MotorCycle("150cc","16ltr","40kmph");

// echo $mc->getDisplacement();
// $mc->displacement = "35cc";
// echo PHP_EOL;
// echo $mc->displacement;
if(isset($mc->tiresize)){
    echo "Found\n";
}else{
    echo "Not found\n";
}

unset($mc->mileage);