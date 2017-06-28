<?php

class CheckoutSuccess implements \SplSubject
{
    protected $salesOrder;
    protected $observers;

    public function __construct($salesOrder)
    {
        $this->salesOrder = $salesOrder;
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getSalesOrder()
    {
        return $this->salesOrder;
    }
}

class SalesOrder
{
}

class Mailer implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo 'Mailing ', get_class($subject->getSalesOrder()), PHP_EOL;
    }
}

class Logger implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo 'Logging ', get_class($subject->getSalesOrder()), PHP_EOL;
    }
}

$salesOrder = new SalesOrder();
$checkoutSuccess = new CheckoutSuccess($salesOrder);
// some code...
$checkoutSuccess->attach(new Mailer());
// some code...
$checkoutSuccess->attach(new Logger());
// some code...
$checkoutSuccess->notify();
