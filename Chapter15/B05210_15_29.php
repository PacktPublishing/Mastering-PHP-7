<?php

namespace spec\Foggyline\Checkout\Model;

use Foggyline\Checkout\Model\Cart;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CartSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Cart::class);
    }
}
