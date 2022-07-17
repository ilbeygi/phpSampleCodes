<?php

/**
 * Method Chaining In PHP
 */

class Chaining
{
    private $word = '';

    public function addWord(string $word): Chaining
    {
        $this->word .= ' ' . $word;
        return $this;
    }

    public function print()
    {
        echo $this->word . PHP_EOL;
    }
}

$chain = new Chaining;
$chain->addWord('Hi')->addWord('Mohammad')->
addWord('Hi')->addWord('Mohammad')->
addWord('Hi')->addWord('Mohammad')->
addWord('Hi')->addWord('Mohammad')->
addWord('Hi')->addWord('Mohammad')->
addWord('Hi')->addWord('Mohammad')->
addWord('Hi')->addWord('Mohammad')->print();

// Hi Mohammad