<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Rx\Observable;
use \Rx\Observer\CallbackObserver;
use \React\EventLoop\Factory;
use \Rx\Scheduler;

$loop = Factory::create();

Scheduler::setDefaultFactory(function () use ($loop) {
    return new Scheduler\EventLoopScheduler($loop);
});

// Generator function
function xrange($start, $end, $step = 1)
{
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}

// Observer
$observer = new CallbackObserver(
    function ($item) {
        echo $item, PHP_EOL;
    }
);

echo 'start', PHP_EOL;
// Observable stream, made from iterator/generator
Observable::fromIterator(xrange(1, 10, 1))
    ->map(function ($item) {
        return $item * 2;
    })
    ->filter(function ($item) {
        return $item % 3 == 0;
    })
    ->reduce(function ($x, $y) {
        return $x + $y;
    })
    ->subscribe($observer);

echo 'end', PHP_EOL;

$loop->run();
