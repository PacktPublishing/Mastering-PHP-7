<?php

$conn = new PDO('mysql:host=localhost;dbname=eelgar_live_magento',
'root', 'mysql');

$stmt = $conn->query('SELECT * FROM customer_entity');
$users = $stmt->fetchAll();

foreach ($users as $user) {
    if (strstr($user['email'], 'test')) {
        // $user['entity_id']
        // $user['email']
        // Do something with data from $user...
    }
}
