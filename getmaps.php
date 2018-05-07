<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include 'oop.php';

		$sql = "SELECT * FROM custom_maps";
		$res = $mysqli->query($sql);
		echo '<table border="1"><tr><th>Id</th><th>Name</th><th>Size</th><th>Date</th><th>Number</th></tr>';
		while($row = $res->fetch_array()){
			echo "<tr>
				<td>".$row['map_id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['size']."</td>
				<td>".$row['date_released']."</td>
				<td>".$row['number_of_players']."</td></tr>";

		}
		echo "</table>";
	?>
</body>
</html>