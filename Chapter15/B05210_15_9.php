<?php

namespace Foggyline\Catalog\Test\Unit\Model;

use PHPUnit\Framework\TestCase;
use Foggyline\Catalog\Model\Product;

class ProductTest extends TestCase
{
    protected $product;

    public function setUp()
    {
        $this->product = new Product('SL', 'Silver Laptop', 4599.99, 25);
    }

    public function testTitle()
    {
        $this->assertEquals(
            'Silver Laptop',
            $this->product->getTitle()
        );
    }

    public function testPrice()
    {
        $this->assertEquals(
            4599.99,
            $this->product->getPrice()
        );
    }
}
