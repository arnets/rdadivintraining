<?php
//this is a client
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
require_once('../../libs/nusoap/lib/nusoap.php');
$c = new soapclient('http://localhost/rdadivintraining/Classes/controllers/soapManager.php?wsdl');
$source = $c->__call('soapManager.getData',array("source" => "Rwanda:Butare","destination" => "Tanzania:Dodoma"));
echo "[".$source."]";
?>
