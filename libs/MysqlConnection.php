<?php

class MysqlConnection
{
	public $connect;
	public function connected($a,$b,$c,$d);
	{
		// $this->localhost = $a;
		// $this->user = $b;
		// $this->pass = $c;
		// $this->db = $d;
		$this->connect = mysqli_connect($a, $b, $c, $d);
	}


}