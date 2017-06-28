<?php

require_once __DIR__ . '/vendor/autoload.php';

try {
    $manager = new MongoDBDriverManager('mongodb://localhost:27017');

    $bulkWrite = new MongoDBDriverBulkWrite;

    $bulkWrite->update(
        ['name' => 'iPhone 7 Black White'],
        ['$set' => [
            'name' => 'iPhone 7 Black Black',
            'price' => 649.99
        ]],
        ['multi' => true, 'upsert' => false]
    );

    $bulkWrite->update(
        ['name' => 'Samsung Galaxy S7 White'],
        ['$set' => [
            'name' => 'Samsung Galaxy S7 Black',
            'price' => 669.99
        ]],
        ['multi' => true, 'upsert' => false]
    );

    $writeConcern = new MongoDBDriverWriteConcern(MongoDBDriverWriteConcern::MAJORITY, 1000);

    $result = $manager->executeBulkWrite('foggyline.products', $bulkWrite, $writeConcern);

    if ($result->getModifiedCount()) {
        echo 'Record(s) saved updated.', PHP_EOL;
    } else {
        echo 'Error occurred.', PHP_EOL;
    }
} catch (MongoDBDriverExceptionException $e) {
    echo $e->getMessage(), PHP_EOL;
    exit;
}

