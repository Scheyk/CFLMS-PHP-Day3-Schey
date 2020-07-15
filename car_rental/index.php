<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
</head>
<body>

	<?php
		include "actions/db_connecting.php";

		$sql = "SELECT * FROM cars";
		$result = mysqli_query($connect, $sql);

		if($result->num_rows == 0) {

			echo "no data inside";

		}elseif (mysqli_num_rows($result) == 1) {

			$row = $result->fetch_assoc();
			echo $row['company']." ".$row['typ']." ".$row['year_of']." ".$row['price']." ".$row['arrivel']." <a href='update.php?id=".$value['id']."'>update</a> <a href='delete_car.php?id=".$value['id']."'>delete</a><br>";

		}else {

			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value) {
				echo $value['id']."---".$value['company']." ".$value['typ']." ".$value['year_of']." ".$value['price']." ".$value['arrivel']." <a href='update.php?id=".$value['id']."'>update</a> <a href='delete_car.php?id=".$value['id']."'>delete</a><br>";

			}
		}

	?>

</body>
</html>