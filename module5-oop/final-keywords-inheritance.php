<?php
abstract class OurClass{
    final function doSomeThing(){
        echo "Do something";
    }
}

class myClass extends OurClass{
    // function doSomeThing()
    // {
    //     echo "Do nothing";
    // }
}

$mc = new myClass();
$mc->doSomeThing();