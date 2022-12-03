<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Adnan", "strtoupper");
sayHello("Erlansyah", "strtolower");
sayHello("Hardiansyah", function (string $name): string {
    return strtoupper($name);
});
sayHello("Borin", fn ($name) => strtoupper($name));
