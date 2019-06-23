<?php
include 'Connection.php';

class mySqlConnection extends Connection
{
    require '../models/config.php';
    protected $conn;
    public function connect()
    {
        try {
            $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
            $this->conn = new PDO($dsn, $user, $pswd, $options);
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
