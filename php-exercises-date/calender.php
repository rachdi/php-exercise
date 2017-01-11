<?php 


$mois= $_POST['mois'];
$annee=$_POST['annee'];
// $jour=date("N");

$number = cal_days_in_month(CAL_GREGORIAN,$mois, $annee); // 31
echo $number;

$nom_jour= array(
	1=>"dimanche",
	2=>"lundi", 
	3=> "mardi", 
	4=> "mercredi",
	5=> "jeudi", 
	6=> "vendredi", 
	7=> "samedi"
	);
for($i=1; $i<$number; $i++){
	echo "<table><th>$i</th></table>";

	foreach ($nom_jour as $key => $value) {

		if($jour==$key){
			echo "<table><th>$value:$i</th></table>";
		}
	}
}
// for($i=0; $i<$number; $i++){
// 	echo "<table><th>$value</th></table>";

// }



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table>
		<td>dimanche</td>
		<td>lundi</td>
		<td>mardi</td>
		<td>mercredi</td>
		<td>jeudi</td>
		<td>vendredi</td>
		<td>samedi</td>
	</table>
	<table>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>

	</table>
</body>
</html>