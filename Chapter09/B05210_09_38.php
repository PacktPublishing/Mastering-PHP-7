<?php

require_once __DIR__ . '/vendor/autoload.php';

use \React\EventLoop\Factory;
use \Rx\Scheduler;
use \Rx\Observable;
use \Rx\Subject\Subject;
use \Rx\Scheduler\EventLoopScheduler;

$loop = Factory::create();

Scheduler::setDefaultFactory(function () use ($loop) {
    return new Scheduler\EventLoopScheduler($loop);
});

$stdin = fopen('php://stdin', 'r');

stream_set_blocking($stdin, 0);

$observer = new class() extends Subject
{
    public function onCompleted()
    {
        echo '$observer.onCompleted: ', PHP_EOL;
        parent::onCompleted();
    }

    public function onNext($val)
    {
        echo '$observer.onNext: ', $val, PHP_EOL;
        parent::onNext($val);
    }

    public function onError(\Throwable $error)
    {
        echo '$observer.onError: ', $error->getMessage(), PHP_EOL;
        parent::onError($error);
    }
};

$loop = Factory::create();

$scheduler = new EventLoopScheduler($loop);

$disposable = Observable::interval(500, $scheduler)
    ->map(function () use ($stdin) {
        return trim(fread($stdin, 1024));
    })
    ->filter(function ($str) {
        return strlen($str) > 0;
    })
    ->subscribe($observer);

$observer->filter(function ($value) {
    return $value == 'quit';
})->subscribeCallback(function ($value) use ($disposable) {
    echo 'disposed!', PHP_EOL;
    $disposable->dispose();
});

$loop->run();

