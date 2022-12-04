<?php

require_once "Product.php";

$product = new Product("Product 1", 3000);
$product->getName();
$product->getPrice();

$productDummy = new ProductDummy("Dummy", 1000);

$productDummy->info();