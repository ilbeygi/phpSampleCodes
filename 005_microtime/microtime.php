<?php

$start = microtime(true);

$arr = [];

for ($i=0; $i < 100000; $i++) { 
    $arr[$i] = uniqid();
}

echo microtime(true) - $start;