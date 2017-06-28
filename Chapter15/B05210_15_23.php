<?php

$loader = require __DIR__ . '/../../vendor/autoload.php';
$loader->addPsr4('Foggyline\\', __DIR__ . '/../../src/Foggyline');

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Foggyline\Catalog\Model\Product;
use \Foggyline\Checkout\Model\Cart;
use \PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    protected $cart;
    protected $products = [];

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->cart = new Cart();
    }

    /**
     * @Given there is a :arg1, which costs $:arg2 and has a tax rate of :arg3
     */
    public function thereIsAWhichCostsAndHasATaxRateOf($arg1, $arg2, $arg3)
    {
        $this->products[$arg1] = new Product($arg1, $arg1, $arg2, $arg3);
    }

    /**
     * @When I add the :arg1 to the cart
     */
    public function iAddTheToTheCart($arg1)
    {
        $this->cart->addProduct($this->products[$arg1], 1);
    }

    /**
     * @Then I should have :arg1 product in the cart
     */
    public function iShouldHaveProductInTheCart($arg1)
    {
        Assert::assertCount((int)$arg1, $this->cart);
    }

    /**
     * @Then the overall subtotal cart price should be $:arg1
     */
    public function theOverallSubtotalCartPriceShouldBe($arg1)
    {
        Assert::assertEquals($arg1, $this->cart->getSubtotal());
    }

    /**
     * @Then the delivery cost should be $:arg1
     */
    public function theDeliveryCostShouldBe($arg1)
    {
        Assert::assertEquals($arg1, $this->cart->getDeliveryCost());
    }

    /**
     * @Then the overall total cart price should be $:arg1
     */
    public function theOverallTotalCartPriceShouldBe($arg1)
    {
        Assert::assertEquals($arg1, $this->cart->getTotal());
    }
}

