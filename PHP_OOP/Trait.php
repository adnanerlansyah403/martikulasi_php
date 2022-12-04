<?php

require_once "data/SayGoodbye.php";

use Data\Traits\{Person, SayHello, SayGoodbye};

$person = new Person();
$person->goodBye("Adnan");
$person->hello("Erlansyah");

$person->name = "Hardiansyah";
var_dump($person);
