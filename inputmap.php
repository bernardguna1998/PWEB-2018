<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include 'oop.php';
		if(isset($_GET['submit']))
		{
			$name = $_GET['name'];
			$size = $_GET['size'];
			$date = $_GET['date'];
			$num = $_GET['players'];

			$sql = "INSERT INTO custom_maps VALUES(NULL, ?,?,?,?)";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param('sdsd', $name, $size, $date, $num);
			$stmt->execute();
			echo ($stmt->affected_rows. "Row inserted and the last id is ".$stmt->insert_id);
		}
	?>


	<form action="inputmap.php" action="GET">
		Map Name : <input type='text' name='name'><br>
		Map Size : <input type='text' name='size'><br>
		Date Released : <input type='date' name='date' ><br>
		Number of Players : <input type='number' name='players'><br>
		<input type='submit' name='submit'> 

	</form>
</body>
</html>