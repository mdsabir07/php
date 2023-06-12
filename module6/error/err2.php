<?php
function custom_error_handler($severity, $msg, $file, $line){
    switch($severity){
        case E_WARNING:
            echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}.";
            break;
        case E_NOTICE:
            echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}.";
            break;
        default:
            echo "Error [{$severity}]: {$msg} in {$file} on line number {$line}.";
    }
    
}
set_error_handler('custom_error_handler');
// trigger_error("This is an error");
// echo PHP_EOL;
// echo substr([1234],3);

function division($divident, $devisor){
    if(0==$devisor){
        trigger_error("Cannot devide by 0");
    }else {
        return $divident/$devisor;
    }
}

echo division(6,0);