<?php

try {
    // Report on all types of errors
    mysqli_report(MYSQLI_REPORT_ALL);

    // Open a new connection to the MySQL server
    $mysqli = new mysqli('127.0.0.1', 'root', 'mL08e!Tq', 'sakila');

    // Perform a query on the database
    $result = $mysqli->query('SELECT * FROM customer WHERE email LIKE "MARIA.MILLER@sakilacustomer.org"');

    // Return the current row of a result set as an object
    $customer = $result->fetch_object();

    // Close opened database connection
    $mysqli->close();

    // Output customer info
    echo $customer->first_name, ' ', $customer->last_name, PHP_EOL;
} catch (mysqli_sql_exception $e) {
    // Output error and exit upon exception
    echo $e->getMessage(), PHP_EOL;
    exit;
}
