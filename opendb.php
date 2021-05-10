<?php
	$host="localhost";
	$username="root";
	$password="";

	$database="db_record";
	$openconnection=mysqli_connect($host,$username,$password,$database);

	if(!$openconnection)
	{
		die("Failed connecting to MySQL: ".mysqli_connect_error());

	}
?>