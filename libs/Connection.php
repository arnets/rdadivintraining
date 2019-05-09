<?php

abstract class Connection
{
	
	public $localhost, $user, $pass, $db;
	abstract public function connect($a,$b,$c,$d);

}