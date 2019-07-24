<?php
	class Server{
		private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $name = 'booking';
		private $connection;
		public function __construct(){
			$this->connection = new PDO("mysql:host={$this->host};dbname={$this->name}", $this->user,$this->pass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
      return $this->connection;
		}
		public function getSeats($data_array){
			$parameters = func_get_args($data_array);
			$source = $parameters[0];
			$destin = $parameters[1];
			$departure = $parameters[2];
			$return = $parameters[3];
			$people = $parameters[4];
	      	$sql = "SELECT * FROM bookings WHERE source = :depart AND destination = :destiny AND depart_date =  :departure AND return_date = :return";
	      	$statement = $this->connection->prepare($sql);
	      	$statement->bindParam(':destiny',$destin);
	      	$statement->bindParam(':depart',$source);
	      	$statement->bindParam(':departure',$departure);
	      	$statement->bindParam(':return',$return);
	      	$statement->execute();
	      	$data = $statement->fetchAll(PDO::FETCH_ASSOC);
	      	return $data;
		}
	}
	$params = array('uri'=>'urn://localhost/rdanewproject/project1/pages/user_server.php');
	$server = new SoapServer(NULL,$params);
	$server->setClass('Server');
	$server->handle();
	
?>