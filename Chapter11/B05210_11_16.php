<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/ServiceProxy.php';

$class = 'ServiceProxy';
$serviceURI = 'http://soap-service.server/index.php';

$wsdlGenerator = new PHP2WSDL\PHPClass2WSDL($class, $serviceURI);
$wsdlGenerator->generateWSDL(true);

file_put_contents(__DIR__ . '/wsdl.xml', $wsdlGenerator->dump());
