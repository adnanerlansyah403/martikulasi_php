<?php

// function foo()
// {
//     echo "FOO" . PHP_EOL;
// }

// function bar()
// {
//     echo "BAR" . PHP_EOL;
// }

// $functionName = 'foo';
// $functionName();

// $functionBar = 'bar';
// $functionBar();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Adnan", "strtoupper");
sayHello("Erlansyah", "strtolower");
sayHello("Hardiansyah", "sampleFunction");
