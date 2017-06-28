<?php

require_once __DIR__ . '/vendor/autoload.php';

use \React\EventLoop\Factory;
use \Rx\Scheduler;

$loop = Factory::create();

Scheduler::setDefaultFactory(function () use ($loop) {
    return new Scheduler\EventLoopScheduler($loop);
});

// Within the loop

$loop->run();
