<?php

namespace Foggyline\Catalog\Test\Unit\Model;

use PHPUnit\Framework\TestCase;
use Foggyline\Catalog\Model\Product;
use Foggyline\Catalog\Model\Category;

class CategoryTest extends TestCase
{
    protected $category;

    public function setUp()
    {
        $this->category = new Category('Laptops', [
            new Product('TRL', 'Test Red Laptop', 1499.99, 25),
            new Product('TYL', 'Test Yellow Laptop', 2499.99, 25),
        ]);
    }

    public function testTotalProductsCount()
    {
        $this->assertCount(2, $this->category->getProducts());
    }

    public function testTitle()
    {
        $this->assertEquals('Laptops', $this->category->getTitle());
    }
}
