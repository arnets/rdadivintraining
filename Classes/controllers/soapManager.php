<?php
//this is a soap server
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
class soapManager{
  function getData($source,$destination)
  {
    $conn=mysqli_connect('localhost','ishimwe','Divin@12345','testing');
    $data = $source;
    $data2 = $destination;
    $query = "SELECT * FROM test WHERE source = '".$data."' AND destination = '".$data2."'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    return $row['destination']." AND ".$row['source'];
  }
}
require('../../libs/nusoap/lib/nusoap.php');
$server = new nusoap_server();
$server->configureWSDL('soapManager', 'urn:travels');
$server->register("soapManager.getData",
array('source' => 'xsd:string'),
array('destination' => 'xsd:string'),
'urn:travels',
'urn:travels#getData');
$server->service(file_get_contents("php://input"));
