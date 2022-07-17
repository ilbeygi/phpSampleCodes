<?php

// trait example

trait Hello
{
    public function sayHello(): void
    {
        echo "Hello !";
    }
}

class Greeting
{
    use Hello;
}

$greeting = new Greeting;
$greeting->sayHello();