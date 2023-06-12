<?php
function x($a){
    y($a);
}

function y($b){
    z($b*2);
}

function z($c){
    // echo $c."\n";
    if($c<20){
        trigger_error("Too small {$c}.\n");
    }else{
        echo "{$c} is okay\n";
    }

    debug_print_backtrace();
}

function w($d,$e){
    x($d+$e);
}
z(25);
w(2,3);