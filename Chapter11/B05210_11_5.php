<?php

$xml = new XMLWriter();
$xml->openMemory();
$xml->setIndent(true); // optional formatting

$xml->startDocument('1.0', 'UTF-8');
$xml->startElement('customer');

$xml->startElement('name');
$xml->writeAttribute('type', 'string');
$xml->writeCData('John');
$xml->endElement(); // </name>

$xml->startElement('age');
$xml->writeAttribute('type', 'integer');
$xml->writeRaw(34);
$xml->endElement(); // </age>

$xml->startElement('addresses');
$xml->startElement('address');
$xml->writeCData('The Address #1');
$xml->endElement(); // </address>
$xml->endElement(); // </addresses>

$xml->endElement(); // </customer>

$document = $xml->outputMemory();
