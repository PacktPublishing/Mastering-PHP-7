<?php

require_once __DIR__ . '/vendor/autoload.php';

try {
    $manager = new MongoDBDriverManager('mongodb://localhost:27017');

    $bulkWrite = new MongoDBDriverBulkWrite;

    $bulkWrite->delete(
        // filter
        [
            'name' => [
                '$regex' => '^iPhone'
            ]
        ],
        // Delete options
        ['limit' => false]
    );

    $writeConcern = new MongoDBDriverWriteConcern(MongoDBDriverWriteConcern::MAJORITY, 1000);

    $result = $manager->executeBulkWrite('foggyline.products', $bulkWrite, $writeConcern);

    if ($result->getDeletedCount()) {
        echo 'Record(s) deleted.', PHP_EOL;
    } else {
        echo 'Error occurred.', PHP_EOL;
    }
} catch (MongoDBDriverExceptionException $e) {
    echo $e->getMessage(), PHP_EOL;
    exit;
}

