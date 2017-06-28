<?php

require_once __DIR__ . '/vendor/autoload.php';

use \React\EventLoop\Factory;
use \Rx\Scheduler;

echo 'STEP#1 ', time(), PHP_EOL;

$loop = Factory::create();

Scheduler::setDefaultFactory(function () use ($loop) {
    return new Scheduler\EventLoopScheduler($loop);
});

echo 'STEP#2 ', PHP_EOL;

$loop->addPeriodicTimer(1, function () {
    echo 'timer ', time(), PHP_EOL;
});

echo 'STEP#3 ', time(), PHP_EOL;

$loop->run();

echo 'STEP#4 ', time(), PHP_EOL;
