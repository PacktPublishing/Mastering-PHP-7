<?php

interface ShipmentStrategy
{
    public function calculate($amount);
}

class UPSShipment implements ShipmentStrategy
{
    public function calculate($amount)
    {
        return 'UPSShipment...';
    }
}

class FedExShipment implements ShipmentStrategy
{
    public function calculate($amount)
    {
        return 'FedExShipment...';
    }
}

class Checkout
{
    private $amount = 0;

    public function __construct($amount = 0)
    {
        $this->amount = $amount;
    }

    public function estimateShipment()
    {
        if ($this->amount > 199.99) {
            $shipment = new FedExShipment();
        } else {
            $shipment = new UPSShipment();
        }

        return $shipment->calculate($this->amount);
    }
}

// Client use
$checkout = new Checkout(19.99);
echo $checkout->estimateShipment(); // UPSShipment...

$checkout = new Checkout(499.99);
echo $checkout->estimateShipment(); // FedExShipment...
