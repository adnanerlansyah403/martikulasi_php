<?php

use Data\Rectangle;

require_once "data/Shape.php";

$rectangle = new Rectangle();

echo $rectangle->getParentCorner() . PHP_EOL;
