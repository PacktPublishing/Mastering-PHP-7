<?php

require_once __DIR__ . '/vendor/autoload.php';

try {
    $manager = new MongoDBDriverManager('mongodb://localhost:27017');
} catch (MongoDBDriverExceptionException $e) {
    echo $e->getMessage(), PHP_EOL;
    exit;
}
