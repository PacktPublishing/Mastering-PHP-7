<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Rx\Observer\CallbackObserver;
use \React\EventLoop\Factory;
use \Rx\Scheduler;

$loop = Factory::create();

Scheduler::setDefaultFactory(function () use ($loop) {
    return new Scheduler\EventLoopScheduler($loop);
});

// correct
$users = serialize(['John', 'Mariya', 'Marc', 'Lucy']);

// faulty
// $users = str_replace('i:', '', serialize(['John', 'Mariya', 'Marc', 'Lucy']));

$observer = new CallbackObserver(
    function ($value) {
        echo 'Observer.$onNext: ', print_r($value, true), PHP_EOL;
    },
    function (\Throwable $t) {
        echo 'Observer.$onError: ', $t->getMessage(), PHP_EOL;
    },
    function () {
        echo 'Observer.$onCompleted', PHP_EOL;
    }
);

Rx\Observable::just($users)
    ->map(function ($value) {
        return unserialize($value);
    })
    ->subscribe($observer);

$loop->run();
