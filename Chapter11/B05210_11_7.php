<?php

$document = new SimpleXMLElement(
    '<?xml version="1.0" encoding="UTF-8"?><customer></customer>'
);

$name = $document->addChild('name', 'John');
$age = $document->addChild('age', 34);
$addresses = $document->addChild('addresses');
$address = $addresses->addChild('address', 'The Address #1');

echo $document->asXML();
