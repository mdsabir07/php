<?php
class Student{
    function __construct($name, $age)
    {
       $this->name = $name;
       if($age<4){
        throw new Exception("Too young\n",1102);
       }elseif($age>35){
        throw new Exception("Too old",1103);
       }
       $this->age = $age; 
    }
}

try{
    $s = new Student('Muhammed',39);
    echo "It will never display";
}catch(Exception $e){
    echo $e->getCode().":".$e->getMessage();
}

