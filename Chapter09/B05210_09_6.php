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

// Generator function, reads CSV file
function users($file)
{
    $users = fopen($file, 'r');
    while (!feof($users)) {
        yield fgetcsv($users)[0];
    }
    fclose($users);
}

// The RxPHP Observer
$logger = new CallbackObserver(
    function ($user) {
        echo $user, PHP_EOL;
    },
    function (\Throwable $t) {
        echo $t->getMessage(), PHP_EOL;
    },
    function () {
        echo 'stream complete!', PHP_EOL;
    }
);

// Dummy map callback function
$mapper = function ($value) {
    return time() . ' | ' . $value;
};

// Dummy filter callback function
$filter = function ($value) {
    return strstr($value, 'Ma');
};

// Generator function
$users = users(__DIR__ . '/users.csv');

// The RxPHP Observable - from generator
Observable::fromIterator($users)
    ->map($mapper)
    ->filter($filter)
    ->subscribe($logger);

$loop->run();
