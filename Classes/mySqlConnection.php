<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
include 'Connection.php';

class mySqlConnection extends Connection
{
    public function connect()
    {
        try {
            require '../models/config.php';
            $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
            return new PDO($dsn, $user, $pswd, $options);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
// $ds = new mySqlConnection();
// $con = $ds->connect();
// $query = "SELECT * FROM test";
// $result = $con->prepare($query);
// $result->execute();
// $row = $result->fetch(PDO::FETCH_ASSOC);
// echo json_encode($row);
