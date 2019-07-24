<?php
	require 'transactions.php';
	global $TransactionInstance;
	$TransactionInstance = Transactions::getInstance();
	class Controller{
		private $usernames,$usersource,$userdestination,$departuredate;
		public function getuserinfo($names,$source,$destin,$date){
			$this->usernames = $names;
			$this->usersource = $source;
			$this->userdestination = $destin;
			$this->departuredate = $date;
			return self::startRequest($names,$source,$destin,$date);
		}
		public function startRequest($nom,$source,$destine,$depart){
			global $TransactionInstance;
			return $TransactionInstance->setRequest($nom,$source,$destine,$depart);
		}
	}
?>