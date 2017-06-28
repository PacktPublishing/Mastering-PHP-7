<?php

$document = new DOMDocument();
$document->load(__DIR__ . '/simple.xml');

$name = $document->getElementsByTagName('name')[0]->nodeValue;
$age = $document->getElementsByTagName('age')[0]->nodeValue;
$address = $document->getElementsByTagName('address')[0]->nodeValue;

echo sprintf(
    'Customer %s, at age %s, living at %s',
    $name, $age, $address
);
