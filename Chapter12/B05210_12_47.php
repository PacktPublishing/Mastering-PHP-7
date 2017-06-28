<?php

try {
    $client = new Redis();
    $client->connect('localhost', 6379);
    echo $client->get('Key3'), PHP_EOL;
    echo $client->get('Key5'), PHP_EOL;
} catch (RedisException $e) {
    echo $e->getMessage(), PHP_EOL;
}

