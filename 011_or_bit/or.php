<?php

/**
 * true  | true   = true   
 * false | true   = true   
 * true  | false  = true   
 * false | false  = false   
 */

$condition1 = false;
$condition2 = false;
$condition3 = false;

var_dump($condition1 | $condition2 | $condition3);

var_dump($condition1 || $condition2 || $condition3);