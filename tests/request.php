<?php

$xmlrequest = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetCountriesAvailable xmlns="http://www.holidaywebservice.com/HolidayService_v2/" />
  </soap:Body>
</soap:Envelope>';


//Change this variables.
$location_URL = 'http://www.holidaywebservice.com/HolidayService_v2.asmx';
$action_URL = "http://www.holidaywebservice.com/HolidayService_v2";

$client = new SoapClient(null, array(
'location' => $location_URL,
'uri'      => "http://www.holidaywebservice.com/HolidayService_v2",
'trace'    => 1,
));

$order_return = $client->__doRequest($xmlrequest,$location_URL,$action_URL,1);

//Get response from here
print_r($order_return);

?>