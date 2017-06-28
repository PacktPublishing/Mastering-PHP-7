<?php

require_once __DIR__ . '/vendor/autoload.php';

try {
    $manager = new MongoDBDriverManager('mongodb://localhost:27017');

    $bulkWrite = new MongoDBDriverBulkWrite;

    $bulkWrite->insert([
        'name' => 'iPhone 7 Black White',
        'price' => 650,
        'weight' => '138g'
    ]);

    $bulkWrite->insert([
        'name' => 'Samsung Galaxy S7 White',
        'price' => 670,
        'weight' => '152g'
    ]);

    $writeConcern = new MongoDBDriverWriteConcern(MongoDBDriverWriteConcern::MAJORITY, 1000);

    $result = $manager->executeBulkWrite('foggyline.products', $bulkWrite, $writeConcern);

    if ($result->getInsertedCount()) {
        echo 'Record(s) saved successfully.', PHP_EOL;
    } else {
        echo 'Error occurred.', PHP_EOL;
    }
} catch (MongoDBDriverExceptionException $e) {
    echo $e->getMessage(), PHP_EOL;
    exit;
}

