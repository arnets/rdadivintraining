<?php
$source = $_POST['query'];
$dest = $_POST['query2'];
$departure_date = $_POST['query3'];
$return_date = $_POST['query4'];
$srcCity = $_POST['srcCity'];
$destCity = $_POST['destCity'];
require_once "../lib/nusoap.php";
$client = new nusoap_client("http://localhost/rdadivintraining/common/soapManager.php");

$error = $client->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}

$result = $client->call("getData", array("source" => $source));

if ($client->fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else {
    $error = $client->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "<h2>data</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}


	// try
	// {
	// 	$params = array('countryCode'=>'Scotland');
	// 	$soapClient = new SoapClient("http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx?wsdl");
	// 	$response = $soapClient->GetHolidaysAvailable($params);
	// 	$display = json_decode(json_encode($response),true);
	// 	echo"<br><br><br>";
	// 	foreach ($display as $arr) {
	// 		echo"<pre>";var_dump($arr);
	// 	}
	// }
	// catch(exeption $e)
	// {
	// 	echo $e->getMessage();
	// }
?>