<?php

try {
    $conn = new PDO(
        "mysql:host=127.0.0.1;dbname=sakila", 'root', 'mL08e!Tq',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $result = $conn->query('SELECT * FROM customer LIMIT 5');
    $customers = $result->fetchAll(PDO::FETCH_OBJ);

    foreach ($customers as $customer) {
        echo $customer->first_name, ' ', $customer->last_name, PHP_EOL;
    }
} catch (PDOException $e) {
    echo $e->getMessage(), PHP_EOL;
}
