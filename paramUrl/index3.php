
<?php  
$dateDebut="2/05/2016";
$dateFin="27/11/2016";


if(isset($_GET["dateDebut"] ) && isset($_GET["dateFin"])){
	
	echo "we don't have the start date and the end date" ;
}
else{
	echo "the start date is : $dateDebut and the end date is $dateFin !";
}




?>