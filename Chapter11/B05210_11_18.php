// NON-WSDL MODE: $server = new SoapServer(null, $options);
// WSDL MODE: $server = new SoapServer('http://soap-service.server/wsdl.xml');
$server = new SoapServer('http://soap-service.server/wsdl.xml');
