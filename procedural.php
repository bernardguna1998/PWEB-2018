<?php
	$user = "root";
	$pass = "";
	$db = "dota_fg";
	$mysqli = mysqli_connect("localhost", $user, $pass, $db);
	if(mysqli_connect_errno($mysqli)){
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	else{
		$res = mysqli_query($mysqli, "SELECT `name` AS nama FROM teams");
		$row = mysqli_fetch_assoc($res);
		echo $row['nama'];
		
		$row = mysqli_fetch_array($res);
		echo $row['nama'];

		mysqli_close($mysqli);
	}
?>