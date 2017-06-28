<?php

$document = new DOMDocument('1.0', 'UTF-8');
$document->formatOutput = true; // optional

$customer = $document->createElement('customer');
$customer = $document->appendChild($customer);

$name = $document->createElement('name');
$name = $customer->appendChild($name);
$nameTypeAttr = $document->createAttribute('type');
$nameTypeAttr->value = 'string';
$name->appendChild($nameTypeAttr);
$name->appendChild($document->createCDATASection('John'));

$age = $document->createElement('age');
$age = $customer->appendChild($age);
$ageTypeAttr = $document->createAttribute('type');
$ageTypeAttr->value = 'integer';
$age->appendChild($ageTypeAttr);
$age->appendChild($document->createTextNode(34));

$addresses = $document->createElement('addresses');
$addresses = $customer->appendChild($addresses);

$address = $document->createElement('address');
$address = $addresses->appendChild($address);
$address->appendChild($document->createCDATASection('The Address #1'));

echo $document->saveXML();
