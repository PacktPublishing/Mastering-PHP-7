<?php

mysqli_report(MYSQLI_REPORT_ALL);
$mysqli = new mysqli('127.0.0.1', 'root', 'mL08e!Tq', 'sakila');

try {
    // Start new transaction
    $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);

    // Create new address
    $result = $mysqli->query('INSERT INTO address (
            address,
            district,
            city_id,
            postal_code,
            phone
        ) VALUES (
            "The street",
            "The district",
            333,
            "31000",
            "123456789"
        );
    ');

    // Fetch newly created address id
    $addressId = $mysqli->insert_id;

    // Create new customer
    $statement = $mysqli->prepare('INSERT INTO customer (
            store_id,
            first_name,
            last_name,
            email,
            address_id
        ) VALUES (
            2,
            "John",
            "Doe",
            "john@test.it",
            ?
        )
    ');
    $statement->bind_param('i', $addressId);
    $statement->execute();

    // Fetch newly created customer id
    $customerId = $mysqli->insert_id;

    // Select newly created customer info
    $statement = $mysqli->prepare('SELECT * FROM customer WHERE customer_id = ?');
    $statement->bind_param('i', $customerId);
    $statement->execute();
    $result = $statement->get_result();
    $customer = $result->fetch_object();

    // Commit transaction
    $mysqli->commit();

    echo $customer->first_name, ' ', $customer->last_name, PHP_EOL;
} catch (mysqli_sql_exception $t) {
    // We MUST be careful with non-db try block operations that throw exceptions
    // As they might cause a rollback inadvertently
    $mysqli->rollback();
    echo $t->getMessage(), PHP_EOL;
}

// Close database connection
$mysqli->close();
