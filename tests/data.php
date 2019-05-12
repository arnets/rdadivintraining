<?php
include"connection.php";
	$dsn ="mysql:host=localhost;dbname=testing";
	$user ="ishimwe";
	$pass ="Divin@12345";
	$con = new Connection($dsn,$user,$pass);
	$query= $con->prepare("SELECT * from test ORDER BY id DESC");
	$query->execute();
	echo(json_encode($query->fetch()));
	
?>