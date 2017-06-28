<?php

try {
    // Report on all types of errors
    mysqli_report(MYSQLI_REPORT_ALL);

    // Open a new connection to the MySQL server
    $mysqli = new mysqli('127.0.0.1', 'root', 'mL08e!Tq', 'sakila');

    $customerIdGt = 100;
    $storeId = 2;
    $email = "%ANN%";

    // Prepare an SQL statement for execution
    $statement = $mysqli->prepare('SELECT * FROM customer WHERE customer_id > ? AND store_id = ? AND email LIKE ?');

    // Binds variables to a prepared statement as parameters
    $statement->bind_param('iis', $customerIdGt, $storeId, $email);

    // Execute a prepared query
    $statement->execute();

    // Gets a result set from a prepared statement
    $result = $statement->get_result();

    // Fetch object from row/entry in result set
    while ($customer = $result->fetch_object()) {
        // Output customer info
        echo $customer->first_name, ' ', $customer->last_name, PHP_EOL;
    }

    // Close a prepared statement
    $statement->close();

    // Close database connection
    $mysqli->close();
} catch (mysqli_sql_exception $e) {
    // Output error and exit upon exception
    echo $e->getMessage();
    exit;
}
