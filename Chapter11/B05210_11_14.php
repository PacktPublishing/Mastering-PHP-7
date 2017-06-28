<?php

require_once __DIR__ . '/ServiceProxy.php';

$options = [
    'uri' => 'http://soap-service.server/index.php'
];

$server = new SoapServer(null, $options);

$server->setClass('ServiceProxy');

$server->handle();

