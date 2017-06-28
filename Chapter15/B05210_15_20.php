Feature: Checkout cart
  In order to buy products
  As a customer
  I need to be able to put products into a cart

  Rules:
  - Each product TAX rate is 25%
  - Delivery for basket under $100 is $10
  - Delivery for basket over $100 is $5

Scenario: Buying a single product under $100
Given there is a "Red Laptop", which costs $75.00 and has a tax rate of 25
When I add the "Red Laptop" to the cart
Then I should have 1 product in the cart
And the overall subtotal cart price should be $75.00
And the delivery cost should be $10.00
And the overall total cart price should be $103.75

Scenario: Buying two products over $100
Given there is a "Red Laptop", which costs $75.00 and has a tax rate of 25
And there is a "Yellow Laptop", which costs $100.00 and has a tax rate of 25
When I add the "Red Laptop" to the cart
And I add the "Yellow Laptop" to the cart
Then I should have 2 product in the cart
And the overall subtotal cart price should be $175.00
And the delivery cost should be $5.00
And the overall total cart price should be $223.75
