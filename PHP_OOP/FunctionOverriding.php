<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Adnan";
$manager->sayHello("Adnan");

$vp = new VicePresident();
$vp->name = "Erlansyah";
$vp->sayHello("Erlansyah");
