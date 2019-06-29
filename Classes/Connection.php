<?php
abstract class Connection
{
    // require '../models/config.php';
    abstract public function connect();
    public function hello()
    {
        echo"hello";
    }
}
