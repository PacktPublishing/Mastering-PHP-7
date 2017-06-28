<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given there is a :arg1, which costs $:arg2 and has a tax rate of :arg3
     */
    public function thereIsAWhichCostsAndHasATaxRateOf($arg1, $arg2, $arg3)
    {
        throw new PendingException();
    }

    /**
     * @When I add the :arg1 to the cart
     */
    public function iAddTheToTheCart($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should have :arg1 product in the cart
     */
    public function iShouldHaveProductInTheCart($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the overall subtotal cart price should be $:arg1
     */
    public function theOverallSubtotalCartPriceShouldBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the delivery cost should be $:arg1
     */
    public function theDeliveryCostShouldBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the overall total cart price should be $:arg1
     */
    public function theOverallTotalCartPriceShouldBe($arg1)
    {
        throw new PendingException();
    }
}

