<?php

declare(strict_types=1);

namespace Foggyline\Catalog\Model;

class Product
{
    protected $id;
    protected $title;
    protected $price;
    protected $taxRate;

    public function __construct(string $id, string $title, float $price, int $taxRate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->taxRate = $taxRate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTaxRate(): int
    {
        return $this->taxRate;
    }
}
