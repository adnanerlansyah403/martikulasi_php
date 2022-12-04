<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Adnan";
$manager->sayHello("Budi");

$vp = new ViceManager();
$vp->name = "Erlansyah";
$vp->sayHello("Joko");
