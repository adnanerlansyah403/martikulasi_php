<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict, Sample, Dummy};
use Data\Two\Conflict as Conflict2;
use const Helper\APPLICATION;
use function Helper\helpMe;

$conflict = new Conflict();
$conflict2 = new Conflict2();

helpMe();

echo APPLICATION;
