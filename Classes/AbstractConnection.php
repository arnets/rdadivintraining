<?php
abstract class abstractConnection
{
	  abstract public function connect($dsn,$user,$pswd);
		public function Hello()
		{
			echo "hello";
		}
}
?>
