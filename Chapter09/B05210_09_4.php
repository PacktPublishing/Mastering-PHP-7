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

$users = Observable::fromArray(['John', 'Mariya', 'Marc', 'Lucy']);

$logger = new CallbackObserver(
    function ($user) {
        echo 'Logging: ', $user, PHP_EOL;
    },
    function (\Throwable $t) {
        echo $t->getMessage(), PHP_EOL;
    },
    function () {
        echo 'Stream complete!', PHP_EOL;
    }
);

$users->subscribe($logger);

$loop->run();
