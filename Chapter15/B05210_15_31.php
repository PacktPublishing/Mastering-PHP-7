<?php

namespace spec\Foggyline\Checkout\Model;

use Foggyline\Checkout\Model\Cart;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Foggyline\Catalog\Model\Product;

class CartSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Cart::class);
    }

    function it_adds_single_product_to_cart()
    {
        $this->addProduct(
            new Product('YL', 'Yellow Laptop', 1499.99, 25),
            2
        );

        $this->count()->shouldBeLike(1);
    }

    function it_adds_two_products_to_cart()
    {
        $this->addProduct(
            new Product('YL', 'Yellow Laptop', 1499.99, 25),
            2
        );

        $this->addProduct(
            new Product('RL', 'Red Laptop', 2499.99, 25),
            2
        );

        $this->count()->shouldBeLike(2);
    }
}

