<?php
//this is a soap server
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

function getData($source) {
$conn=mysqli_connect('localhost','ishimwe','Divin@12345','testing');
$data = $source;
$query = "SELECT * FROM test WHERE source = '".$data."'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
return $row['destination'];
}
require('../../libs/nusoap/lib/nusoap.php');
$server = new nusoap_server();
$server->configureWSDL('soapManager', 'urn:travels');
$server->register("getData",
array('source' => 'xsd:string'),
array('destination' => 'xsd:string'),
'urn:travels',
'urn:travels#getData');
@$server->service(file_get_contents("php://input"));?>