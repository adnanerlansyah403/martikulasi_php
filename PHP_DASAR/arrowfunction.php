<?php

$firstName = "Adnan";
$lastName = "Erlansyah";

$sayHelloAdnan = fn () => "Hello $firstName, $lastName" . PHP_EOL;

echo $sayHelloAdnan();
