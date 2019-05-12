<?php
//this is a client
class Client
{
	public function __construct()
	{
		$params = array('location' =>'http://rdadivintraining/controllers/common/soapManager.php',
			'uri' => 'urn://rdadivintraining/controllers/common/soapManager.php','trace' => 1);
		$this->instance = new SoapClient(NULL, $params);
	}

	public function fetchData($id_array)
	{
		return $this->instance->__soapCall('getData', $id_array);
	}
}

$client = new Client;
?>
