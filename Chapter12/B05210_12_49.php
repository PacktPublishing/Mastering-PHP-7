<?php

try {
    $client = new Redis();
    $client->connect('localhost', 6379);

    $client->set('user', [
        'name' => 'John',
        'age' => 34,
        'salary' => 4200.00
    ]);

    // $client->get('user');
    // returns string containing "Array" chars

    $client->set('customer', json_encode([
        'name' => 'Marc',
        'age' => 43,
        'salary' => 3600.00
    ]));

    // $client->get('customer');
    // returns json looking string, which we can simply json_decode()
} catch (RedisException $e) {
    echo $e->getMessage(), PHP_EOL;
}
