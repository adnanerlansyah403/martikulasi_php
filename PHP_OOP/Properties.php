<?php

require_once "data/Person.php";

$person = new Person("Adnan", "Bekasi");

$person->name = "Adnan";
$person->address = null;

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Erlansyah", "Cikarang");
$person2->name = "Erlansyah";
$person2->address = "Cikarang";

var_dump($person2);

// error
// $person2->name = [];
