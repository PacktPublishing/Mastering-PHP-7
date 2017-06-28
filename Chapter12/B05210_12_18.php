<?php

try {
    // Report on all types of errors
    mysqli_report(MYSQLI_REPORT_ALL);

    // Open a new connection to the MySQL server
    $mysqli = new mysqli('127.0.0.1', 'root', 'mL08e!Tq', 'sakila');

    // Prepare some teat address data
    $address = 'The street';
    $district = 'The district';
    $cityId = 135; // Matches the Dallas city in Sakila DB
    $postalCode = '31000';
    $phone = '123456789';

    // Prepare an SQL statement for execution
    $statement = $mysqli->prepare('INSERT INTO address (
            address,
            district,
            city_id,
            postal_code,
            phone
        ) VALUES (
            ?,
            ?,
            ?,
            ?,
            ?
        );
    ');

    // Bind variables to a prepared statement as parameters
    $statement->bind_param('ssiss', $address, $district, $cityId, $postalCode, $phone);

    // Execute a prepared Query
    $statement->execute();

    // Close a prepared statement
    $statement->close();

    // Quick & "dirty" way to fetch newly created address id
    $addressId = $mysqli->insert_id;

    // Close database connection
    $mysqli->close();
} catch (mysqli_sql_exception $e) {
    // Output error and exit upon exception
    echo $e->getMessage();
    exit;
}
