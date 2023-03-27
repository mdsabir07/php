<?php

// class Product{

//     // property
//     public $ProductPrice="100tk";

//     // Constrcutor is one kind of magic method
//     function __construct($name) { //parameterized constructor
//         echo $name;
//     }

//     public function ProductCatList(){
//         $CatList = array("A","B","C");
//         print_r($CatList);
//     }

//     static function ProductCategoryList(){
//         $CatList = array("A","B","C");
//         print_r($CatList);
//     }
// }

// $obj = new Product("Muhammed is good boy");
// echo PHP_EOL;
// $obj->ProductCatList();
// Product::ProductCategoryList();

/**
 * Inheritance
 */
// class Father{

//     // function BankDeposit(){
//     //     echo "50000000";
//     // }
//     static function BankDeposit(){
//         echo "50000000";
//     }

// }
abstract class Father{

    // function BankDeposit(){
    //     echo "50000000";
    // }
    static function BankDeposit(){
        echo "50,000,000";
    }

}

class Son extends Father{

    // function BankDeposit()
    // {
    //     echo "40000000";
    // }

}

// $obj = new Son();
// $obj->BankDeposit();
Son::BankDeposit();