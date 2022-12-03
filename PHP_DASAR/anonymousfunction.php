<?php

$sayHello = function (string $name): void {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Adnan");
$sayHello("Erlansyah");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Adnan", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Erlansyah", $filterFunction);

$firstName = "Adnan";
$lastName = "Erlansyah";

$sayHelloAdnan = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloAdnan();
