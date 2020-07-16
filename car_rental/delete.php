<?php
	require_once 'actions/db_connecting.php';

	if($_GET["id"]) {
		$id = $_GET["id"]

		$sql = "DELETE FROM cars WHERE id = $id";

		if(mysqli_query($connect, $sql)) {
			echo "sucess <br>
			 	  <a href='index.php'>back home</a>";
		} else {
			echo "error4";
		}

	}
?>