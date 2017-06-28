<?php

try {
    $client = new Redis();
    $client->connect('localhost', 6379);

    $client->set('test', 'test1');
    $client->set('test', 'test2');

    // $client->get('test');
    // returns string containing "test2" chars
} catch (RedisException $e) {
    echo $e->getMessage(), PHP_EOL;
}
