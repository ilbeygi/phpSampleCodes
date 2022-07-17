<?php

/**
 * true  & true   = true   
 * false & true   = false   
 * true  & false  = false   
 * false & false  = false   
 */

$condition1 = true;
$condition2 = false;
$condition3 = true;

// var_dump($condition1 & $condition2 & $condition3);

var_dump($condition1 && $condition2 && $condition3);
