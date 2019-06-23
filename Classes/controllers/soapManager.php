<?php
// this is a soap server
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
include '../Connection.php';
class soapManager extends Connection
{
    require '../models/config.php';
    protected $conn;
    public function connect()
    {
        try {
            $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
            $this->conn = new PDO($this->dsn, $this->user, $this->pswd, $options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function getData($source, $destination)
    {
        $con = $this->connect();
        if ($source != "" && $source != "") {
            $query = "SELECT * FROM test WHERE source LIKE '%$source%' AND destination LIKE '%$destination%'";
        }

        $result = $con->prepare($query);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return json_encode($row);
        // foreach ($result as $row) {
    //   return $row['destination']." AND ".$row['source'];
    // }
    //return $row['destination']." AND ".$row['source'];
    }
}
require('../../libs/nusoap/lib/nusoap.php');
$server = new nusoap_server();
$server->configureWSDL('soapManager', 'urn:travels');
$server->register(
    "soapManager.getData",
    array('source' => 'xsd:string'),
    array('destination' => 'xsd:string'),
    'urn:travels',
    'urn:travels#getData'
);
$server->service(file_get_contents("php://input"));
