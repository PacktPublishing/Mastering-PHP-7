<?php

$conn = new PDO('mysql:host=localhost;dbname=eelgar_live_magento',
  'root', 'mysql');

$stmt = $conn->prepare('SELECT entity_id, email FROM customer_entity WHERE email LIKE :email');
$stmt->bindValue(':email', '%test%');
$stmt->execute();

while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
  // $user['entity_id']
  // $user['email']
  // Do something with data from $user...
}
