<?php

// Global Scope

$name = "Adnan";

function sayHello()
{
    global $name;
    echo $name . PHP_EOL;

    echo $GLOBALS['name'] . PHP_EOL;
}

sayHello();


// Local Scope

function createName()
{
    $name2 = "Adnan";
}

createName();
echo $name2 . PHP_EOL;


// Static Scope

function increment()
{
    static $counter = 1;

    echo "Counter = $counter " . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
