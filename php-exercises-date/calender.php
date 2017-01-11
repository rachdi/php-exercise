<?php 


$mois= $_POST['mois'];
$annee=$_POST['annee'];


$number = cal_days_in_month(CAL_GREGORIAN,$mois, $annee); // 31
echo $number;

$nom_jour= array(
	0=>"dimanche",
	1=>"lundi", 
	2=> "mardi", 
	3=> "mercredi",
	4=> "jeudi", 
	5=> "vendredi", 
	6=> "samedi"
	);
for($i=1; $i<=$number; $i++){
	foreach ($nom_jour as $key => $value) {
		$n="N";
		$njour=date($);	
		echo "<table><td>$value/td>";
		echo "<th>$i</th></table>";
	}

}


?>