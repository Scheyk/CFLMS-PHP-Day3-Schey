<!DOCTYPE html>
<html>
<head>
	<title>add Car</title>
</head>
<body>

	<form action="actions/function_add.php" method="post">
		<input type="hidden" name="id">
		conpany:
		<input type="text" name="company"><br>
		typ:
		<input type="text" name="typ"><br>
		year_of:
		<input type="date" name="year_of"><br>
		price:
		<input type="number" name="price"><br>
		arrivel?
		<input type="text" name="arrivel"><br>
		<input type="submit" name="submit" value="submit"><br>		
	</form>

</body>
</html>