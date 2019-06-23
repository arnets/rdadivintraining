<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
class dataHandler
{
    public function insert($table, $fields, $data)
    {
        $fieldsLen = sizeof($fields);
        $dataLen = sizeof($data);
        $fieldsHolder = $fields[0];
        for ($i = 1; $i < $fieldsLen; $i++) {
            $fieldsHolder = $fieldsHolder.", ".$fields[$i];
        }
        $dataHolder = "'".$data[0]."'";
        for ($i = 1; $i < $dataLen; $i++) {
            $dataHolder = $dataHolder.", "."'".$data[$i]."'";
        }
        $sql = "INSERT INTO ".$table."(".$fieldsHolder.") VALUES(".$dataHolder.")";
        // echo $sql;
        if ($con->exec($sql)) {
            echo"data inserted successfully";
        }
    }
    public function update($table, $fields, $data)
    {
        $fieldsLen = sizeof($fields);
        $dataLen = sizeof($data);
        $update = $fields[0]." = "."'".$data[0]."'";
        for ($i = 1; $i < $fieldsLen; $i++) {
            $update = $update.", ".$fields[$i]." = "."'".$data[$i]."'";
        }
        $sql = "UPDATE ".$table." SET ".$update." WHERE id = '$fields[0]'";
        // echo $sql;
        if ($con->exec($sql)) {
            echo"data updated successfully";
        }
    }
    public function delete($table, $id)
    {
        $sql = "DELETE FROM ".$table." WHERE id = '$id'";
        // echo $sql;
        if ($con->exec($sql)) {
            echo"data deleted successfully";
        }
    }
}
// $obj = new dataHandler();
// $data = ["1","divin","fiston"];
// $fields = ["id","fname","lname"];
// $table = "users";
// $id = '1';
// $obj->delete($table, $id);
