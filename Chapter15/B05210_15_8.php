<?php

require __DIR__ . '/autoload.php';

use Foggyline\Catalog\Model\Product;
use Foggyline\Catalog\Model\Category;
use Foggyline\Catalog\Block\Category\View as CategoryView;

$category = new Category('Laptops', [
    new Product('RL', 'Red Laptop', 1499.99, 25),
    new Product('YL', 'Yellow Laptop', 2499.99, 25),
    new Product('BL', 'Blue Laptop', 3499.99, 25),
]);

$categoryView = new CategoryView($category);
echo $categoryView->render();
