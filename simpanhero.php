<?php
	include("oop.php");
	if(isset($_GET['act']) && $_GET['act'] == 'delete')
	{	
		$sql = "DELETE FROM heroes WHERE hero_id = ".$_GET['id'];
	}else{
		$name = $_GET['nama'];
		$tipe = $_GET['tipe'];
		$str = $_GET['str'];
		$agi = $_GET['agi'];
		$int = $_GET['int'];
		$dmg = $_GET['dmg'];
		$arm = $_GET['arm'];
		
		if(isset($_GET['rng']))
			$isrng = 1;
		else
			$isrng = 0;

		if(!isset($_GET['id']))
			$sql = "INSERT INTO heroes VALUES (NULL,?,?,?,?,?,?,?,?)";
		else
			$sql = "UPDATE heroes SET 
					name = ?, type = ?, strength = ?, agility = ?, intelligence = ?, damage = ?, armor = ?, is_ranged = ?
					WHERE hero_id = ".$_GET['id'];
	}
	$stmt = $mysqli->prepare($sql);

	$stmt->bind_param("ssdddddd", $name, $tipe, $str, $agi, $int, $dmg, $arm, $isrng);
	$stmt->execute();

	echo ($stmt->affected_rows. "Row inserted and the last id is ".$stmt->insert_id);

	$stmt->close();
	
	$mysqli->close();

	
?>

<a href = 'getheroes.php'>Back to heroes list</a>