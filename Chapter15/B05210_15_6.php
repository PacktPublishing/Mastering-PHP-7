<?php

declare(strict_types=1);

namespace Foggyline\Catalog\Block\Category;

use Foggyline\Catalog\Model\Category;

class View
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function render(): string
    {
        $products = '';

        foreach ($this->category->getProducts() as $product) {
            if ($product instanceof \Foggyline\Catalog\Model\Product) {
                $products .= '<div class="product">
                    <h1 class="product-title">' . $product->getTitle() . '</h1>
                    <div class="product-price">' . number_format($product->getPrice(), 2, ',', '.') . '</h1>
                </div>';
            }
        }

        return '<div class="category">
            <h1 class="category-title">' . $this->category->getTitle() . '</h1>
            <div class="category-products">' . $products . '</div>
        </div>';
    }
}
