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
}
