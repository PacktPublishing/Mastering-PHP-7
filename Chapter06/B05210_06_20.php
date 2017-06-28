<?php

trait Formatter
{
   public function formatPrice($price)
   {
       return sprintf('%.2F', $price);
   }
}

class Ups
{
   use Formatter;

private $price = 4.4999; // Base shipping price

public function getShippingPrice($formatted = false)

   {
      // Shipping cost calc... $this->price = XXX

      if ($formatted) {
        return $this->formatPrice($this->price);
      }

        return $this->price;
    }
}

class Dhl
{
    use Formatter;

    private $price = 9.4999; // Base shipping price

    public function getShippingPrice($formatted = false)
    {
        // Shipping cost calc... $this->price = XXX

        if ($formatted) {
            return $this->formatPrice($this->price);
        }

        return $this->price;
    }
}

$ups = new Ups();
echo $ups->getShippingPrice(true); // 4.50

$dhl = new Dhl();
echo $dhl->getShippingPrice(true); // 9.50
