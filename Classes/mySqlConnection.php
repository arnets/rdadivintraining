<?php
include 'Connection.php';
//connection

class mySqlConnection extends Connection
{
    //use connection;
    protected $conn;
    public function connect()
    {
        try {
            $user ="ishimwe";
            $pswd ="Divin@12345";
            $dsn = "mysql:host=localhost;dbname=testing";
            $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
            $this->conn = new PDO($dsn, $user, $pswd, $options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
