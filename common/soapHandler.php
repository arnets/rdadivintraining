<?php
	try
	{
		$params = array('countryCode'=>'Scotland');
		$soapClient = new SoapClient("http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx?wsdl");
		$response = $soapClient->GetHolidaysAvailable($params);
		$display = json_decode(json_encode($response),true);
		echo"<br><br><br>";
		foreach ($display as $arr) {
			echo"<pre>";var_dump($arr);
		}
	}
	catch(exeption $e)
	{
		echo $e->getMessage();
	}
?>