<?php

$ch = curl_init();

$headers = [
    'Content-Type: application/json',
    'X-AUTH-TOKEN: some-auth-token-here'
];

curl_setopt($ch, CURLOPT_URL, 'http://rest-service.server/user/welcome');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['name' => 'John']));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

echo $result;
