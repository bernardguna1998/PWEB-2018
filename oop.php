	<?php
		$user = "root";
		$pass = "mysql";
		$db = "dota_f";
		$mysqli = new mysqli("localhost", $user, $pass, $db);

	if($mysqli->connect_errno){
		echo "Failed to connect to MySQL: ".$mysqli->connect_error;
	}

	?>
