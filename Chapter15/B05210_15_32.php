<?php

namespace spec\Foggyline\Catalog\Model;

use Foggyline\Catalog\Model\Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Product::class);
    }

    function let()
    {
        $this->beConstructedWith(
            'YL', 'Yellow Laptop', 1499.99, 25
        );
    }

    function its_price_should_be_like()
    {
        $this->getPrice()->shouldBeLike(1499.99);
    }

    function its_title_should_be_like()
    {
        $this->getTitle()->shouldBeLike('Yellow Laptop');
    }
}

