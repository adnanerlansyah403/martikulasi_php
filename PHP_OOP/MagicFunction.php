<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Adnan";
$student1->value = 100;
$student1->setSample("SAMPLE");

$string = (string) $student1;
echo $string . PHP_EOL;

$student1(1, "Adnan", true);

var_dump($student1);
