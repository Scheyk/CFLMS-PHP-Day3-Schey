<?php
	require_once 'db_connecting.php';

	if($_POST) {
		$id = $_POST["id"];
		$company = $_POST["company"];
		$typ = $_POST["typ"];
		$year_of = $_POST["year_of"];
		$price = $_POST["price"];
		$arrivel = $_POST["arrivel"];

		$sql = "UPDATE `cars` SET `company`='$company',`typ`='$typ',`year_of`='$year_of',`price`='$price',`arrivel`='$arrivel' WHERE id = '$id'";

		if(mysqli_query($connect,$sql)) {
			echo "success <br>
			 	  <a href='../index.php'>back home</a>";
		} else {
			error3;
		}
	}
?>