<?php

function sum(int $first, int $second): int
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else {
        return "D";
    }
}

$score = getFinalValue(80);
var_dump($score);

$score2 = getFinalValue(60);
var_dump($score2);
