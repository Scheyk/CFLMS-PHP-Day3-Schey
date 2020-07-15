<?php
	$hostName = "localhost";
	$user = "root";
	$pw = "";
	$db_name = "car_rental";

	$connect = mysqli_connect($hostName, $user, $pw, $db_name);

	if(!$connect){
		echo "error";
	}
?>