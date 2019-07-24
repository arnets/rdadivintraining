<?php
	require 'connectionHandler.php';
	global $connectionInstance;
	$connectionInstance = ConnectionHandler::getInstance();
	class Response{
		private static $instance;
		public static function getInstance(){
			if (is_null(self::$instance)) {
				self::$instance = new Response();
			}
			return self::$instance;
		}
		public function getdata(){
			global $connectionInstance;
			$connection = $connectionInstance->getConnection();
			$sql = "SELECT* FROM bookings";
			$statement = $connection->prepare($sql);
			$statement->execute();
			$data = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $data;
		}
	}