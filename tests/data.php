<?php
include"connection.php";
	$dsn ="mysql:host=localhost;dbname=testing";
	$user ="ishimwe";
	$pass ="Divin@12345";
	$con = new Connection($dsn,$user,$pass);
	$query= $con->prepare("SELECT * from test ORDER BY id DESC");
	$query->execute();
	while($data= $query->fetch()){
		$xml = new DOMDocument('1.0','UTF-8');
		$xml->load("data.xml");
		$rootTag = $xml->getElementsByTagName("document")->item(0);
		$dataTag = $xml->createElement("data");
		$id = $xml->createElement("id",$data['id']);
		$source = $xml->createElement("source",$data['source']);
		$destination = $xml->createElement("destination",$data['destination']);
		$departureDate = $xml->createElement("departureDate",$data['departure_date']);
		$returnDate = $xml->createElement("returnDate",$data['return_date']);
		$dataTag-> appendChild($id);
		$dataTag-> appendChild($source);
		$dataTag-> appendChild($destination);
		$dataTag-> appendChild($departureDate);
		$dataTag-> appendChild($returnDate);
		$rootTag-> appendChild($dataTag);
		$xml->save("data.xml");
	} 
?>