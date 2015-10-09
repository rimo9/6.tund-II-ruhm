<?php
	
	// table.php
	require_once("functions.php");
	
	//kas kasutaja tahab kustutada
	// kas aadressireal on ?delete=??!??!?!
	if(isset($_GET["delete"])){
		
		// saadan kaasa id, mida kustutada
		deleteCar($_GET["delete"]);
		
	}
	
	
	
	$car_list = getCarData();
	//var_dump($car_list);

?>
<table border=1 >
	<tr>
		<th>id</th>
		<th>kasut id</th>
		<th>auto nr märk</th>
		<th>värv</th>
		<th>X</th>
	</tr>
	
	<?php
	
		// iga massiivis olema elemendi kohta
		// count($car_list) - massiivi pikkus
		for($i = 0; $i < count($car_list); $i++){
			// $i = $i +1; sama mis $i += 1; sama mis $i++;
			echo "<tr>";
			
			echo "<td>".$car_list[$i]->id."</td>";
			echo "<td>".$car_list[$i]->user_id."</td>";
			echo "<td>".$car_list[$i]->number_plate."</td>";
			echo "<td>".$car_list[$i]->color."</td>";
			echo "<td><a href='?delete=".$car_list[$i]->id."'>X</a></td>";
			
			echo "</tr>";
		}
	
	?>

</table>
