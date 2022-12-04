<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Hardiansyah";
$person->sayHello("Adnan");

$person2 = new Person();
$person2->name = "Erlansyah";
$person2->sayHello(null);

$person2->info();
