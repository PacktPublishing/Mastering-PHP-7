<?php

require_once __DIR__ . '/vendor/autoload.php';

use FoggylineMP7GreetingWelcome;

$greeting = new Welcome();

echo $greeting->generate('John');
