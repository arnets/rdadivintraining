<?php
/**
 * this is the controller
 */
 error_reporting(E_ALL);
 ini_set('display_errors', TRUE);
 ini_set('display_startup_errors', TRUE);
 require_once('../../libs/nusoap/lib/nusoap.php');
class myController
{

  function search($src,$dest)
  {
    $c = new soapclient('http://localhost/rdadivintraining/Classes/controllers/soapManager.php?wsdl');
    $source = $c->__call('soapManager.getData',array("source" => $src,"destination" => $dest));
    $decode = json_decode($source);
    $encode = json_encode($decode);
    echo "[".$encode."]";
  }
}
  $form_data = json_decode(file_get_contents("php://input"));
  $search_query = $form_data->search_query;
  $search_query2 = $form_data->search_query2;
  $obj = new myController();
  $obj->search($search_query, $search_query2);


?>
