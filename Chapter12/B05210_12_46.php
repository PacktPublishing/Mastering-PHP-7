<?php

try {
    $client = new Redis();
    $client->connect('localhost', 6379);
    // Code...
} catch (RedisException $e) {
    echo $e->getMessage(), PHP_EOL;
}

