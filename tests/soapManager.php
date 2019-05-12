<?php
//this is a soap server
class Server
{
	public function __construct()
	{

	}
	public function getData($id_array)
	{
		return "hey";
	}
}

$params = array('uri' =>'rdadivintraining/controllers/common/soapManager.php');
$server = new SoapServer(NULL, $params);
$server->setClass('server');
$server->handle();
?>