<?php
	$host = "localhost";
	$db_name = "db_gwsc";
	$username = "root";
	$password = "";
	$mysqli = new mysqli($host,$username,$password,$db_name);
	if($mysqli->connect_errno){
		echo "Cannot connect to database";
		exit();
	}
?>