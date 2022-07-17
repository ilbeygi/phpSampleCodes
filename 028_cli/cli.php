<?php

/**
 * show menu :
 *      1 : show todo list
 *      2 : add todo
 *      3 : remove todo
 */

 function getCommand()
 {
    echo "Menu : " . PHP_EOL;
    echo "1 : show todo list." . PHP_EOL;
    echo "2 : add todo." . PHP_EOL;
    echo "3 : remove todo." . PHP_EOL;

    return readline("Please enter your command : ");
 }

 $todo = ['Todo One', 'Todo two'];

 while (1) {
    $command = getCommand();

    if (! in_array($command, [1,2,3])) {
        die("Not Validate. \n");
    }

    if ($command == 1) {
        echo PHP_EOL;
        foreach ($todo as $key => $value) {
            echo "TODO #" . ++$key . " : " . $value . PHP_EOL;
        }
        echo PHP_EOL;
    }

 }

 echo $command;

 echo "\n";