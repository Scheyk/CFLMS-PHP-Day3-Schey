<?php
	require_once 'db_connecting.php';

	if($_POST){
		$company = $_POST["company"];
		$typ = $_POST["typ"];
		$year_of = $_POST["year_of"];
		$price = $_POST["price"];
		$arrivel = $_POST["arrivel"];

		$sql = "INSERT INTO `cars`(`company`, `typ`, `year_of`, `price`, `arrivel`) VALUES ('$company','$typ','$year_of','$price','$arrivel')";

		if(mysqli_query($connect, $sql)){
			echo "success <br>
				  <a href='../index.php'>back home</a>";
		}else {
			echo "error2";
		}
	}
?>