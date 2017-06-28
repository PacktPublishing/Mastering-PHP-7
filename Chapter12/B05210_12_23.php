<?php

try {
    $host = '127.0.0.1';
    $dbname = 'sakila';
    $username = 'root';
    $password = 'mL08e!Tq';

    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    echo $e->getMessage(), PHP_EOL;
}
