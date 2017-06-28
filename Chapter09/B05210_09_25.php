<?php

use \Rx\DisposableInterface;
use \Rx\ObservableInterface;
use \Rx\ObserverInterface;
use \Rx\SchedulerInterface;
use \Rx\Observer\CallbackObserver;
use \Rx\Operator\OperatorInterface;

class UnserializeOperator implements OperatorInterface
{
    /**
     * @param \Rx\ObservableInterface $observable
     * @param \Rx\ObserverInterface $observer
     * @param \Rx\SchedulerInterface $scheduler
     * @return \Rx\DisposableInterface
     */
    public function __invoke(
        ObservableInterface $observable,
        ObserverInterface $observer,
        SchedulerInterface $scheduler = null
    ): DisposableInterface
    {
        $callbackObserver = new CallbackObserver(
            function ($value) use ($observer) {
                if ($unsValue = unserialize($value)) {
                    $observer->onNext($unsValue);
                } else {
                    $observer->onError(
                        new InvalidArgumentException('Faulty serialized string.')
                    );
                }
            },
            function ($error) use ($observer) {
                $observer->onError($error);
            },
            function () use ($observer) {
                $observer->onCompleted();
            }
        );

        // ->subscribe(...) => DisposableInterface
        return $observable->subscribe($callbackObserver, $scheduler);
    }
}
