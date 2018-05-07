<?php
	include("oop.php");
	if(isset($_GET['id'])){
		$sql = "SELECT * FROM heroes WHERE hero_id = ?";
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param('i',$_GET['id']);
		$stmt->execute();
		$res = $stmt->get_result();
		$row = $res->fetch_assoc();
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Edit Hero</h2>

	<form action="simpanhero.php" method="GET">	
		<table>
			<input type="hidden" name='id' value='<?=$_GET['id']?>'>
			<tr><td align="right">Nama Hero</td><td>
				<input type="text" name="nama" value="<?=$row['name']?>"></td></tr>			
			<tr><td align="right">Tipe</td><td>
			<select name='tipe'>
				<?php
					$a=$b=$c="";
					if($row['type']=='Strength')
						$a="selected";
					if($row['type']=='Agility')
						$b="selected";
					if($row['type']=='Intelligence')
						$c="selected";

					$r = "";
					if($row['is_ranged']==1)
						$r = " checked";

				?>
				<option value="Strength" <?=$a?>>Strength</option>
				<option value="Agility"<?=$b?>>Agility</option>
				<option value="Intelligence" <?=$c?>>Intelligence</option>

			</select></td></tr>		
			<tr><td align="right">Strength</td><td><input type="text" name="str" size="3" value="<?=$row['strength']?>"></td></tr>			
			<tr><td align="right">Agility</td><td><input type="text" name="agi" size="3" value="<?=$row['agility']?>"></td></tr>			
			<tr><td align="right">Intelligence</td><td><input type="text" name="int" size="3" value="<?=$row['intelligence']?>"></td></tr>			
			<tr><td align="right">Damage</td><td><input type="text" name="dmg" size="3" value="<?=$row['damage']?>"></td></tr>			
			<tr><td align="right">Armor</td><td><input type="text" name="arm" size="3" value="<?=$row['armor']?>"></td></tr>		
			<tr><td align="right">Ranged</td><td><input type="checkbox" name="rng" <?=$r?>>Yes</td></tr>		
			<tr><td align="right"></td><td><input type="submit" name="sub" value="Simpan"></td></tr>				
		</table>
	</form>
</body>
</html>