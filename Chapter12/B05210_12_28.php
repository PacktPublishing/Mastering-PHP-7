<?php

try {
    $conn = new PDO(
        "mysql:host=127.0.0.1;dbname=sakila", 'root', 'mL08e!Tq',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $statement = $conn->prepare('DELETE FROM payment WHERE payment_id = :payment_id');
    $statement->execute([
        ':payment_id' => 16046
    ]);
} catch (PDOException $e) {
    echo $e->getMessage(), PHP_EOL;
}
