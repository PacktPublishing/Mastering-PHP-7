<?php

try {
    $conn = new PDO(
        "mysql:host=127.0.0.1;dbname=sakila", 'root', 'mL08e!Tq',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $statement = $conn->prepare('INSERT INTO address (
            address,
            district,
            city_id,
            postal_code,
            phone,
            location
        ) VALUES (
            :address,
            :district,
            :city_id,
            :postal_code,
            :phone,
            POINT(:longitude, :latitude)
        );
    ');

    $statement->execute([
        ':address' => 'The street',
        ':district' => 'The district',
        ':city_id' => '537',
        ':postal_code' => '31000',
        ':phone' => '888777666333',
        ':longitude' => 45.55111,
        ':latitude' => 18.69389
    ]);
} catch (PDOException $e) {
    echo $e->getMessage(), PHP_EOL;
}
