<?php
/**
 * this is the controller
 */
 error_reporting(E_ALL);
 ini_set('display_errors', true);
 ini_set('display_startup_errors', true);
 require_once('../../libs/nusoap/lib/nusoap.php');
 include "dataHandlerTest.php";
class Controller extends dataHandlerTest
{
    public function search($src, $dest)
    {
        $c = new soapclient('http://localhost/rdadivintraining/Classes/controllers/soapManager.php?wsdl');
        $source = $c->__call('soapManager.getData', array("source" => $src,"destination" => $dest));
        $decode = json_decode($source);
        $encode = json_encode($decode);
        echo "[".$encode."]";
    }
    public function insertData($data)
    {
        $ctrl = new dataHandlerTest();
        $ctrl->insert($data);
    }
}
  $form_data = json_decode(file_get_contents("php://input"));
    if (isset($form_data->search_query,$form_data->search_query2)) {
        $search_query = $form_data->search_query;
        $search_query2 = $form_data->search_query2;
        $obj = new Controller();
        $obj->search($search_query, $search_query2);
    } elseif (isset($form_data->insert_query,$form_data->insert_query2)) {
        $insert_query = $form_data->insert_query;
        $insert_query2 = $form_data->insert_query2;
        $data=["bookings" => "",
            "source" => $insert_query,
            "destination" => $insert_query2,
            "depart_date" =>"2017-12-19",
            "return_date" =>"2018-11-21"];
        $obj = new Controller();
        $obj->insertData($data);
        echo "<script type='text/javascript'>alert('data saved');</script>";
    } else {
        echo"nothing set";
    }
