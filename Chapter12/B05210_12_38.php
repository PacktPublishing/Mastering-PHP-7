<?php

require_once __DIR__ . '/vendor/autoload.php';

try {
    $manager = new MongoDBDriverManager('mongodb://localhost:27017');

    /* Select only the matching documents */
    $filter = [
        'price' => [
            '$gte' => 619.99,
        ],
    ];

    $queryOptions = [
        /* Return only the following fields in the matching documents */
        'projection' => [
            'name' => 1,
            'price' => 1,
        ],
        /* Return the documents in descending order of price */
        'sort' => [
            'price' => -1
        ]
    ];

    $query = new MongoDBDriverQuery($filter, $queryOptions);

    $readPreference = new MongoDBDriverReadPreference(MongoDBDriverReadPreference::RP_PRIMARY);

    $products = $manager->executeQuery('foggyline.products', $query, $readPreference);

    foreach ($products as $product) {
        echo $product->name, ': ', $product->price, PHP_EOL;
    }
} catch (MongoDBDriverExceptionException $e) {
    echo $e->getMessage(), PHP_EOL;
    exit;
}
