<?php

try {
    $client = new Redis();
    $client->connect('localhost', 6379);
    $client->del('user');
} catch (RedisException $e) {
    echo $e->getMessage(), PHP_EOL;
}
