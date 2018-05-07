<?php
include("oop.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$lim = 3;
		$off = 0;
		$page = 1;
		
		
		$search = "";
		$getsearch="";
		$param = "%%";
		$keyword= "";
		if(isset($_GET['search']))
			{
				$search = "WHERE name LIKE ?";
				$getsearch = "&search=".$_GET['search'];
				
				$keyword = $_GET['search'];
				$param = "%{$keyword}%";
			}
		
		$stmt = $mysqli->prepare("SELECT * FROM heroes WHERE name LIKE ?");
		$stmt->bind_param('s', $param );
		$stmt->execute();
		$res = $stmt->get_result();
		$total = $res->num_rows;

		if(isset($_GET['page']))
		{	
			$page = $_GET['page'];
			$off = ($page-1) * $lim;
			
		
		}
		$sql = "SELECT * FROM heroes WHERE name LIKE ? LIMIT ".$lim." OFFSET ".$off;
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param('s',$param);
		$stmt->execute();
		$res = $stmt->get_result();
		

		echo "<form action='getheroes.php' method='GET'>
			Search by name : <input name='search' value='".$keyword."'><input type='submit' name='subsearch'>
		</form>";
		echo "<a href='getheroes.php'>View All</a>";
		echo "<table border='1' width='40%'><tr>
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
			<th>Str</th>
			<th>Agi</th>
			<th>Int</th>
			<th>Dmg</th>
			<th>Armor</th>
			<th>Is Ranged</th>
			<th>Action</th>
			</tr>";
			while ($row = $res->fetch_assoc()) {
				
				echo "<tr>";
				$id = 0;
				foreach ($row as $key=> $value) {
					# code...
					if($key == 'hero_id')
						$id = $value;
					if($key == 'is_ranged')
					{
						$a = "Meelee";
						if($value == 1)
							$a = "Ranged";
						echo "<td>".$a."</td>";

					}else
					echo "<td>".$value."</td>";

				}

				echo "<td><a href='edithero.php?id=".$id."'>edit</a> <a href='simpanhero.php?act=delete&id=".$id."'>delete</a></td></tr>";
			}


		echo "</table>";
		if($total > $lim){
			$pages = ceil($total/$lim);
			$prev = $page - 1;
			$next = $page + 1;

			if($prev < 1)
				$prev = 1;
			if($next > $pages)
				$next = $pages;


			echo " <a href='getheroes.php?page=1".$getsearch."'>First</a>, ";
			echo " <a href='getheroes.php?page=".$prev.$getsearch."'> << </a>, ";
			for($i=1; $i <= $pages; $i++)
				echo " <a href='getheroes.php?page=".$i.$getsearch."'>".$i."</a>, ";

			echo " <a href='getheroes.php?page=".$next.$getsearch."'> >> </a> ";
			echo " <a href='getheroes.php?page=".$pages.$getsearch."'>Last</a> <br/> ";

			echo "<a href='inputhero.php'>Input new hero</a>";
		}



	?>
</body>
</html>