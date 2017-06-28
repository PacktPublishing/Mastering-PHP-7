<?php

declare(strict_types=1);

namespace Foggyline\Checkout\Model;

class Cart implements \Countable
{
    protected $productQtyMapping = [];

    public function addProduct(\Foggyline\Catalog\Model\Product $product, int $qty): self
    {
        $this->productQtyMapping[$product->getId()]['product'] = $product;
        $this->productQtyMapping[$product->getId()]['qty'] = $qty;
        return $this;
    }

    public function removeProduct($productId): self
    {
        if (isset($this->productQtyMapping[$productId])) {
            unset($this->productQtyMapping[$productId]);
        }

        return $this;
    }

    public function getSubtotal()
    {
        $subtotal = 0.0;

        foreach ($this->productQtyMapping as $mapping) {
            $subtotal += ($mapping['qty'] * $mapping['product']->getPrice());
        }

        return $subtotal;
    }

    public function getTotal()
    {
        $total = 0.0;

        foreach ($this->productQtyMapping as $mapping) {
            $total += ($mapping['qty'] * ($mapping['product']->getPrice() + ($mapping['product']->getPrice() * ($mapping['product']->getTaxRate() / 100))));
        }

        return $total;
    }

    public function count()
    {
        return count($this->productQtyMapping);
    }
}
