<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
include "../mySqlConnection.php";
class dataHandlerTest extends mySqlConnection
{
    public function insert($data)
    {
        $connect = new mySqlConnection();
        $con = $connect->connect();
        $len = sizeof($data);
        $keys = array_keys($data);
        $table = $keys[0];
        $fields = $keys[1];
        for ($i=2; $i < $len; $i++) {
            $fields =$fields.",".$keys[$i];
        }
        $values = "'".$data[$keys[1]]."'";
        for ($i=2; $i < $len; $i++) {
            $values = $values.","."'".$data[$keys[$i]]."'";
        }
        $sql = "INSERT INTO ".$table."(".$fields.") VALUES(".$values.")";
        // echo $sql;
        if ($con->exec($sql)) {
            echo"data inserted successfully";
        }
    }
    public function update($data)
    {
        $connect = new mySqlConnection();
        $con = $connect->connect();
        $len = sizeof($data);
        $keys = array_keys($data);
        $table = $keys[0];
        $id = $data[$keys[1]];
        $update = $keys[1]."="."'".$data[$keys[1]]."'";
        for ($i=2; $i < $len; $i++) {
            $update = $update.",".$keys[$i]."="."'".$data[$keys[$i]]."'";
        }
        $sql = "UPDATE ".$table." SET ".$update." WHERE id = $id";
        // echo $sql;
        if ($con->exec($sql)) {
            echo"data updated successfully";
        }
    }
    public function delete($data)
    {
        $connect = new mySqlConnection();
        $con = $connect->connect();
        $keys = array_keys($data);
        $table = $keys[0];
        $id = $data[$keys[1]];
        $sql = "DELETE FROM ".$table." WHERE id = '$id'";
        // echo $sql;
        if ($con->exec($sql)) {
            echo"data deleted successfully";
        }
    }
}
// $src = "this";
// $dest = "that";
// $data=["bookings" => "","id" => "1","source" => $src,"destination" => $dest];
// $obj = new dataHandler();
// $obj->update($data);
