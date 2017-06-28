<?php

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->addPsr4('Foggyline\\', __DIR__ . '/src/Foggyline');

use Foggyline\Catalog\Model\Product;
use \Foggyline\Checkout\Model\Cart;

$cart = new Cart();
$cart->addProduct(new Product('RL', 'Red Laptop', 75.00, 25), 1);
$cart->addProduct(new Product('YL', 'Yellow Laptop', 100.00, 25), 1);

echo $cart->getSubtotal(), PHP_EOL;
echo $cart->getTotal(), PHP_EOL;

$cart->removeProduct('YL');

echo $cart->getSubtotal(), PHP_EOL;
echo $cart->getTotal(), PHP_EOL;
