<?php
	require 'request.php';
	global $RequestsInstance;
	$RequestsInstance = Requests::getInstance();
	class Transactions {
		private static $instance;
		private $url = 'http://localhost/tickets/commons/classes/response.php?';
		public static function getInstance(){
			if (is_null(self::$instance)) {
				self::$instance = new Transactions();
			}
			return self::$instance;
		}
		public function setRequest($name,$source,$destin,$date){
			global $RequestsInstance;
			$urlrequest = $this->url.'names='."$name".'&source='."$source".'&destination='."$destin".'&depart='."$date";
			$RequestsInstance->seturl($this->url);
			$RequestsInstance->settime($date);
			$RequestsInstance->setsource($source);
			$RequestsInstance->setdestination($destin);
			return self::getResponse($urlrequest);
		}
		public function polling(){

		}
		public function getResponse($request){
			global $RequestsInstance;
			return $RequestsInstance->sendRequest($request);
		}
	}
?>