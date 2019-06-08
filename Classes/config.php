<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

include 'AbstractConnection.php';
//connection

class Connection extends abstractConnection
{
//use connection;
  protected $conn;
  public function connect($dsn,$user,$pswd)
    {
      try
      {
        $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
        $this->conn = new PDO($dsn,$user,$pswd,$options);
        return $this->conn;
        }
      catch (PDOException $e)
      {
          echo "Connection failed: " . $e->getMessage();
      }

    }
}
$user ="ishimwe";
$pass ="Divin@12345";
$dsn = "mysql:host=localhost;dbname=testing";
$server = "mysql:host=localhost;dbname=cloudways";
$connect = new Connection();
$con = $connect->connect($dsn,$user,$pass);
$sql = "select * from test";
foreach ($con->query($sql) as $row)
  {
    echo " id: ".$row['id'] .": Source: ".$row['source'] . "to "." Destination: ".$row['destination']."<br>";
    }
?>
