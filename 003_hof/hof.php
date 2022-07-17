<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try {
    echo $dasd;
    
    //code...
} catch (\Throwable $th) {
    var_dump($th);
}


// function hof(callable $call) {
//     return function ($x) use ($call)
//     {
//         return $call($call($x));
//     };
// }

// function plus($var) {
//     return $var + 5;
// }

// $var = hof('plus');

// echo $var(15);