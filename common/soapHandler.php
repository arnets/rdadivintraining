<?php
	try
	{
		$soapClient = new SoapClient("http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx?wsdl");
		$response = $soapClient->GetCountriesAvailable();
		$display = json_encode($response);
		echo"<br><br><br>";
		var_dump($display);
		$parser = new DOMParser();
		$xmlDoc = $parser.parseFromString($response,"text/xml");
		echo $xmlDoc;
	}
	catch(exeption $e)
	{
		echo $e->getMessage();
	}
?>