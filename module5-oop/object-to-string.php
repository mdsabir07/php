<?php
class Color{
    public $color;
    function __construct($color)
    {
        $this->color = $color;
    }

    // function setColor($color){
    //     $this->color = $color;
    // }

    function __toString()
    {
        return "This is {$this->color} color\n";
    }
}

$c = new Color("Red");
echo $c;