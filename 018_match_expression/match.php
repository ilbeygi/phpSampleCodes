<?php

// match expression

$expression = 1;

// switch ($expression) {
//     case 1:
//         echo 1;
//         break;
//     case '1':
//         echo ' 1 is string ';
//         break;
//     default:
//         echo 'default';
//         break;
// }

$result = match($expression) {
    1           =>  1,
    '1'         =>  ' 1 is string ',
    default   =>  'default'
};

echo $result;