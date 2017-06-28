<?php

require 'vendor/autoload.php';

$payload = IronWorker\Runtime::getPayload(true);

echo 'Welcome ', $payload['name'], PHP_EOL;
