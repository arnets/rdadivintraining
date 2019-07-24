<?php
	require 'response.php';
	global $ResponseInstance;
	$ResponseInstance = Response::getInstance();
	class Requests{
		private $url;
		private $time;
		private $source;
		private $destin;
		private static $instance;

		public function seturl($url){
			$this->url = $url;
		}
		public function settime($time){
			$this->time = $time;
		}
		public function setsource($source){
			$this->source = $source;
		}
		public function setdestination($destin){
			$this->destin = $destin;
		}
		public function geturl(){
			return $this->url;
		}
		public function gettime(){
			return $this->time;
		}
		public function getsource(){
			return $this->source;
		}
		public function getdestination(){
			return $this->destin;
		}
		public static function getInstance(){
			if (is_null(self::$instance)) {
				self::$instance = new Requests();
			}
			return self::$instance;
		}
		public function sendRequest($url){
			// $ch = curl_init();
			// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			// curl_setopt($ch, CURLOPT_URL,$url);
			// $content = curl_exec($ch);
			global $ResponseInstance;
			$content = $ResponseInstance->getdata();
			return $content;
		}
	}
?>