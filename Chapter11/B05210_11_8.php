<?php

$document = new SimpleXMLElement(__DIR__ . '/simple.xml', null, true);

$name = (string)$document->name;
$age = (string)$document->age;
$address = (string)$document->addresses[0]->address;

echo sprintf(
    'Customer %s, at age %s, living at %s',
    $name, $age, $address
);
