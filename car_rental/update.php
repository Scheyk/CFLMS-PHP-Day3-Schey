<?php
	require_once 'actions/db_connecting.php';

	if($_GET) {

		$id = $_GET["id"];

		$sql = "SELECT * FROM cars WHERE id = $id";
		$result = mysqli_query($connect, $sql);

		$row = $result->fetch_assoc();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>update Car</title>
</head>
<body>

	<form action="actions/function_update_car.php" method="post">
		<input type="hidden" value="<?php echo $row['id']?>">
		<input type="text" name="company" value="<?php echo $row['company']?>"><br>
		<input type="text" name="typ" value="<?php echo $row['typ']?>"><br>
		<input type="date" name="year_of" value="<?php echo $row['year_of']?>"><br>
		<input type="number" name="price" value="<?php echo $row['price']?>"><br>
		<input type="boolean" name="arrivel" value="<?php echo $row['arrivel']?>"><br>
		<input type="submit">
	</form>

</body>
</html>