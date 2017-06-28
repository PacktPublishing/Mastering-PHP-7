<?php

namespace Foggyline\Catalog\Test\Unit\Block\Category;

use PHPUnit\Framework\TestCase;
use Foggyline\Catalog\Model\Product;
use Foggyline\Catalog\Model\Category;
use Foggyline\Catalog\Block\Category\View as CategoryView;

class ViewTest extends TestCase
{
    protected $category;
    protected $categoryView;

    public function setUp()
    {
        $this->category = new Category('Laptops', [
            new Product('TRL', 'Test Red Laptop', 1499.99, 25),
            new Product('TYL', 'Test Yellow Laptop', 2499.99, 25),
        ]);

        $this->categoryView = new CategoryView($this->category);
    }

    public function testCategoryTitle()
    {
        $this->assertContains(
            '<h1 class="category-title">Laptops',
            $this->categoryView->render()
        );
    }

    public function testProductsContainer()
    {
        $this->assertContains(
            '<h1 class="product-title">Test Yellow',
            $this->categoryView->render()
        );
    }
}
