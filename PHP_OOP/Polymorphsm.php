<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Adnan");
var_dump($company);

$company->programmer = new BackendProgrammer("Erlansyah");
var_dump($company);

$company->programmer = new FrontendProgrammer("Hardiansyah");
var_dump($company);

sayHelloProgrammer(new Programmer("Adnan"));
sayHelloProgrammer(new BackendProgrammer("Erlansyah"));
sayHelloProgrammer(new Programmer("Hardiansyah"));
