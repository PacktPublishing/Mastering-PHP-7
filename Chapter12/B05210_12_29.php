<?php

$conn = new PDO(
    "mysql:host=127.0.0.1;dbname=sakila", 'root', 'mL08e!Tq',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

try {
    // Start new transaction
    $conn->beginTransaction();

    // Create new address
    $result = $conn->query('INSERT INTO address (
            address,
            district,
            city_id,
            postal_code,
            phone,
            location
        ) VALUES (
            "The street",
            "The district",
            537,
            "27107",
            "888777666555",
            POINT(45.55111, 18.69389)
        );
    ');

    // Fetch newly created address id
    $addressId = $conn->lastInsertId();

    // Create new customer
    $statement = $conn->prepare('INSERT INTO customer (
            store_id,
            first_name,
            last_name,
            email,
            address_id
        ) VALUES (
            2,
            "John",
            "Doe",
            "john-pdo@test.it",
            :address_id
        )
    ');

    $statement->execute([':address_id' => $addressId]);

    // Fetch newly created customer id
    $customerId = $conn->lastInsertId();

    // Select newly created customer info
    $statement = $conn->prepare('SELECT * FROM customer WHERE customer_id = :customer_id');
    $statement->execute([':customer_id' => $customerId]);
    $customer = $statement->fetchObject();

    // Commit transaction
    $conn->commit();

    echo $customer->first_name, ' ', $customer->last_name, PHP_EOL;
} catch (PDOException $e) {
    $conn->rollback();
    echo $e->getMessage(), PHP_EOL;
}
