<?php

try {
    $client = new Redis();
    $client->connect('localhost', 6379);

    $client->multi();

    $result1 = $client->set('tKey1', 'Test#1'); // Valid command
    $result2 = $client->zadd('tKey2', null); // Invalid command

    if ($result1 == false || $result2 == false) {
        $client->discard();
        echo 'Transaction aborted.', PHP_EOL;
    } else {
        $client->exec();
        echo 'Transaction commited.', PHP_EOL;
    }
} catch (RedisException $e) {
    echo $e->getMessage(), PHP_EOL;
}
