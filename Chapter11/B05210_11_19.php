<?php

$options = [
    'location' => 'http://soap-service.server/index.php',
    'uri' => 'http://soap-service.server/index.php',
    'trace ' => true,
];

// NON-WSDL MODE: $client = new SoapClient($wsdl = null, $options);
// WSDL MODE: $client = new SoapClient('http://soap-service.server/wsdl.xml', $options);

$client = new SoapClient('http://soap-service.server/wsdl.xml', $options);

echo $client->customerWelcome('John');
echo $client->userWelcome('Mariya');
