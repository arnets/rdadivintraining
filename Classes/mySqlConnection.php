<?php
include 'AbstractConnection.php';
//connection

class mySqlConnection extends abstractConnection
{
//use connection;
  protected $conn;
  public function mysqlconnect($dsn,$user,$pswd)
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
?>
