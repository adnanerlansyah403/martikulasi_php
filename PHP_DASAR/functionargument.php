<?php

// function sayHello($firstName, $lastName = "Anonymous")
// {
//     echo "Hello $firstName $lastName" . PHP_EOL;
// }

// sayHello("Adnan");
// sayHello("Erlansyah");

// function sum(int $first, int $last)
// {
//     $total = $first + $last;
//     echo "Total $first + $last = $total" . PHP_EOL;
// }

// sum(10, 10);
// sum("10", 10);
// sum(true, false);
// sum([], []);

function sumAll(...$nilai)
{
    $total = 0;
    foreach ($nilai as $key => $value) {
        $total += $value;
    }

    echo "Total " . join(",", $nilai) . " = $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(...$values);
