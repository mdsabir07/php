<?php
ini_set('display_errors',0);
ini_set("memory_limit","5M");
register_shutdown_function('fatal_error_handler');
function fatal_error_handler(){
    $error = error_get_last();
    if($error){
        // do something
        echo "Fatal error nnnn\n";
    }
}
echo str_repeat("*",3**4);
// no_function();

// function recursion(){
//     recursion();
// }