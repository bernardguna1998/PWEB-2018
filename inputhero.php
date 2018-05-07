<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Input Hero</h2>
	<form action="simpanhero.php" method="GET">	
		<table>
			<tr><td align="right">Nama Hero</td><td><input type="text" name="nama"></td></tr>			
			<tr><td align="right">Tipe</td><td>
			<select name='tipe'>
				<option value="Strength">Strength</option>
				<option value="Agility">Agility</option>
				<option value="Intelligence">Intelligence</option>

			</select></td></tr>		
			<tr><td align="right">Strength</td><td><input type="text" name="str" size="3"></td></tr>			
			<tr><td align="right">Agility</td><td><input type="text" name="agi" size="3"></td></tr>			
			<tr><td align="right">Intelligence</td><td><input type="text" name="int" size="3"></td></tr>			
			<tr><td align="right">Damage</td><td><input type="text" name="dmg" size="3"></td></tr>			
			<tr><td align="right">Armor</td><td><input type="text" name="arm" size="3"></td></tr>		
			<tr><td align="right">Ranged</td><td><input type="checkbox" name="rng">Yes</td></tr>		
			<tr><td align="right"></td><td><input type="submit" name="sub" value="Simpan"></td></tr>				
		</table>
	</form>
</body>
</html>