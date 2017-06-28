<?php

try {
    $conn = new PDO(
        "mysql:host=127.0.0.1;dbname=sakila", 'root', 'mL08e!Tq',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $statement = $conn->prepare('SELECT * FROM customer
        WHERE customer_id > :customer_id AND store_id = :store_id AND email LIKE :email');

    $statement->execute([
        ':customer_id' => 100,
        ':store_id' => 2,
        ':email' => '%ANN%',
    ]);

    $customers = $statement->fetchAll(PDO::FETCH_OBJ);

    foreach ($customers as $customer) {
        echo $customer->first_name, ' ', $customer->last_name, PHP_EOL;
    }
} catch (PDOException $e) {
    echo $e->getMessage(), PHP_EOL;
}
