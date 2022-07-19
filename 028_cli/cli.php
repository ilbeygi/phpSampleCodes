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

 function addTodo(&$todoList) {
    $todo = readline("Please add your todo : ");
    $todoList[] = $todo;
 }

 function removeTodo(&$todoList) {
    $todoId = (int) readline("Add todo ID for remove : ");
    $todoId = $todoId > 0 ? $todoId - 1 : $todoId;

    if (! isset($todoList[$todoId])) {
        echo "Not Validate." . PHP_EOL;
        exit;
    }

    unset($todoList[$todoId]);

    $todoList = array_values($todoList);

    echo "Remove Success." . PHP_EOL;
 }

 $todo = [];

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

    if ($command == 2) {
        // add todo
        addTodo($todo);
    }

    if ($command == 3) {
        // add todo
        removeTodo($todo);
    }
 }

 echo $command;

 echo "\n";