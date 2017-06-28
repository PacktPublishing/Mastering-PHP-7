<?php

try {
    $client = new Redis();
    $client->connect('localhost', 6379);

    $values = $client->mget(['Key1', 'Key2', 'Key4']);
    print_r($values);
} catch (RedisException $e) {
    echo $e->getMessage(), PHP_EOL;
}
