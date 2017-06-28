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

$loop->addTimer(2, function () {
    echo 'timer#1 ', time(), PHP_EOL;
});

echo 'STEP#3 ', time(), PHP_EOL;

$loop->addTimer(5, function () {
    echo 'timer#2 ', time(), PHP_EOL;
});

echo 'STEP#4 ', time(), PHP_EOL;

$loop->addTimer(3, function () {
    echo 'timer#3 ', time(), PHP_EOL;
});

echo 'STEP#5 ', time(), PHP_EOL;
$loop->run();

echo 'STEP#6 ', time(), PHP_EOL;
