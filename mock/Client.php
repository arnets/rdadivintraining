<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
require_once('../libs/nusoap/lib/nusoap.php');
$c = new soapclient('http://localhost/rdadivintraining/mock/Caltest.php?wsdl');
$source = $c->__call();
$decode = json_decode($source);
$encode = json_encode($decode);
echo "[".$encode."]";
