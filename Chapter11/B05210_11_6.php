<?php

$xml = new XMLReader();
$xml->open(__DIR__ . '/simple.xml');

$name = '';
$age = '';
$address = '';

while ($xml->read()) {
    if ($xml->name == 'name') {
        $name = $xml->readString();
        $xml->next();
    } elseif ($xml->name == 'age') {
        $age = $xml->readString();
        $xml->next();
    } elseif ($xml->name == 'address') {
        $address = $xml->readString();
        $xml->next();
    }
}

echo sprintf(
    'Customer %s, at age %s, living at %s',
    $name, $age, $address
);
