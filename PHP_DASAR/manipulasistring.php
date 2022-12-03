<?php

$name = "Adnan Erlansyah";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// konversi tipe data
$valuestring = (string)100;
var_dump($valuestring);

$valueInteger = (int)"100";
var_dump($valueInteger);

$valueFloat = (float)"1.10";
var_dump($valueFloat);

// menangakses string
$name = "Adnan";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// Variable Parsing & Curly Brace
$name = "Adnan";
$age = 10;
echo "Hello {$name}', Selamat Belajar. Umur mu $age" . PHP_EOL;