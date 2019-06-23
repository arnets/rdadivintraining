<?php
/**
 * this is the controller
 */
 error_reporting(E_ALL);
 ini_set('display_errors', true);
 ini_set('display_startup_errors', true);
 require_once('../../libs/nusoap/lib/nusoap.php');
 include "dataHandler.php";
 include "../mySqlConnection.php";
class Controller extends mySqlConnection
{
    //use mySqlConnection;
    public function search($src, $dest)
    {
        $c = new soapclient('http://localhost/rdadivintraining/Classes/controllers/soapManager.php?wsdl');
        $source = $c->__call('soapManager.getData', array("source" => $src,"destination" => $dest));
        $decode = json_decode($source);
        $encode = json_encode($decode);
        echo "[".$encode."]";
    }
}
  $form_data = json_decode(file_get_contents("php://input"));
    if (isset($form_data->search_query,$form_data->search_query2)) {
        $search_query = $form_data->search_query;
        $search_query2 = $form_data->search_query2;
        $obj = new Controller();
        $obj->search($search_query, $search_query2);
    } else {
        echo"nothing set";
    }
