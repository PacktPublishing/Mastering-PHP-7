#!/usr/bin/env php
<?php

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->add('Foggyline', __DIR__ . '/src/');

use Symfony\Component\Console\Application;
use Foggyline\Console\Command\{
   CustomerExportCommand,
   CustomerRegisterCommand,
   CustomerStatusSetCommand
};

$app = new Application('Foggyline App', '1.0.0');

$app->add(new CustomerRegisterCommand());
$app->add(new CustomerStatusSetCommand());
$app->add(new CustomerExportCommand());

$app->run();
