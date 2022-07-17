<?php

// dynamic arguments

function dynamicArgs(...$args)
{
    var_dump($args);
}

dynamicArgs('test', 1, 'false', true);