<?php
/**
 * this is the controller
 */
 error_reporting(E_ALL);
 ini_set('display_errors', TRUE);
 ini_set('display_startup_errors', TRUE);
 require_once('../../libs/nusoap/lib/nusoap.php');
class myController extends soapclient
{

  function search($src,$dest)
  {
    $c = new soapclient('http://localhost/rdadivintraining/Classes/controllers/soapManager.php?wsdl');
    $source = $c->__soapcall('soapManager.getData',array("source" => $src,"destination" => $dest));
    echo $source;
  }
}
$form_data = json_decode(file_get_contents("php://input"));
if (isset($form_data->search_query) && isset($form_data->search_query2))
{
  $search_query = $form_data->search_query;
  $search_query2 = $form_data->search_query2;
  $obj = new myController();
  $obj->search($search_query, $search_query2);
}

?>
