<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
include '../Classes/mySqlConnection.php';
$user ="ishimwe";
$pass ="Divin@12345";
$dsn = "mysql:host=localhost;dbname=testing";
$server = "mysql:host=localhost;dbname=cloudways";
$connect = new mySqlConnection();
$con = $connect->mysqlconnect($dsn,$user,$pass);
$sql = "select * from test";
foreach ($con->query($sql) as $row) {
    echo " Source: ".$row['source'] . "to "." Destination: ".$row['destination'];
    }
 ?>
