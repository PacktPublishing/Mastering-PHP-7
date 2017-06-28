<?php

try {
    // Report on all types of errors
    mysqli_report(MYSQLI_REPORT_ALL);

    // Open a new connection to the MySQL server
    $mysqli = new mysqli('127.0.0.1', 'root', 'mL08e!Tq', 'sakila');

    // Prepare some teat address data
    $address = 'The new street';
    $addressId = 600;

    // Prepare an SQL statement for execution
    $statement = $mysqli->prepare('UPDATE address SET address = ? WHERE address_id = ?');

    // Bind variables to a prepared statement as parameters
    $statement->bind_param('si', $address, $addressId);

    // Execute a prepared Query
    $statement->execute();

    // Close a prepared statement
    $statement->close();

    // Close database connection
    $mysqli->close();
} catch (mysqli_sql_exception $e) {
    // Output error and exit upon exception
    echo $e->getMessage();
    exit;
}
