<?php
class Fund{

    private $fund;
    
    function __construct($initialFund=0)
    {
        $this->fund = $initialFund;
    }
    function addFund($money){
        $this->fund += $money;
    }

    function deductFund($money){
        $this->fund -= $money;
    }

    function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}

$myFund = new Fund(100);
// $myFund->getTotal();

// $myFund->addFund(25);
// $myFund->getTotal();
// $myFund->fund = 75;
$myFund->deductFund(20);
$myFund->getTotal();