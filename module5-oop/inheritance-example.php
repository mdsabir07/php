<?php

class Shape
{
    private $name;
    private $area;

    function __construct($name)
    {
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea()
    {
        echo "This {$this->name}'s area is {$this->area}\n";
    }

    function calculateArea()
    {
    }
}

class Triangle extends Shape
{
    private $a, $b, $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculateArea()
    {
        $parameter = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($parameter * ($parameter - $this->a) * ($parameter - $this->b) * ($parameter - $this->c));
    }
}

class Ractangle extends Shape
{
    private $a, $b;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Ractangle");
    }

    public function calculateArea()
    {
        $this->area = $this->a * $this->b;
    }
}

$r = new Ractangle(4, 3);
echo $r->getArea();
