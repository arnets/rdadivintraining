<?php
require 'config.php';
abstract class Connection
{
    abstract public function connect();
    public function hello()
    {
        echo"hello";
    }
}
