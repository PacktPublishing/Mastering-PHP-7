<?php

try {
    $conn = new PDO(
        "mysql:host=127.0.0.1;dbname=sakila", 'root', 'mL08e!Tq',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $statement = $conn->prepare('UPDATE address SET phone = :phone WHERE address_id = :address_id');

    $statement->execute([
        ':phone' => '888777666555',
        ':address_id' => 600,
    ]);
} catch (PDOException $e) {
    echo $e->getMessage(), PHP_EOL;
}
