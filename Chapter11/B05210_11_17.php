<?xml version="1.0"?>
<definitions xmlns="http://schemas.xmlsoap.org/wsdl/" xmlns:tns="http://soap-service.server/index.php" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap-enc="http://schemas.xmlsoap.org/soap/encoding/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" name="ServiceProxy" targetNamespace="http://soap-service.server/index.php">
<types>
<xsd:schema targetNamespace="http://soap-service.server/index.php">
<xsd:import namespace="http://schemas.xmlsoap.org/soap/encoding/"/>
</xsd:schema>
</types>
<portType name="ServiceProxyPort">
<operation name="customerWelcome">
<documentation>Says "Welcome customer..."</documentation>
<input message="tns:customerWelcomeIn"/>
<output message="tns:customerWelcomeOut"/>
</operation>
<operation name="userWelcome">
<documentation>Says "Welcome user..."</documentation>
<input message="tns:userWelcomeIn"/>
<output message="tns:userWelcomeOut"/>
</operation>
</portType>
<binding name="ServiceProxyBinding" type="tns:ServiceProxyPort">
<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
<operation name="customerWelcome">
<soap:operation soapAction="http://soap-service.server/index.php#customerWelcome"/>
<input>
<soap:body use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" namespace="http://soap-service.server/index.php"/>
</input>
<output>
<soap:body use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" namespace="http://soap-service.server/index.php"/>
</output>
</operation>
<operation name="userWelcome">
<soap:operation soapAction="http://soap-service.server/index.php#userWelcome"/>
<input>
<soap:body use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" namespace="http://soap-service.server/index.php"/>
</input>
<output>
<soap:body use="encoded" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/" namespace="http://soap-service.server/index.php"/>
</output>
</operation>
</binding>
<service name="ServiceProxyService">
<port name="ServiceProxyPort" binding="tns:ServiceProxyBinding">
<soap:address location="http://soap-service.server/index.php"/>
</port>
</service>
<message name="customerWelcomeIn">
<part name="name" type="xsd:anyType"/>
</message>
<message name="customerWelcomeOut">
<part name="return" type="xsd:string"/>
</message>
<message name="userWelcomeIn">
<part name="name" type="xsd:anyType"/>
</message>
<message name="userWelcomeOut">
<part name="return" type="xsd:string"/>
</message>
</definitions>
