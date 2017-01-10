
<?php  
$nom="Namare";
$prenom="Jean";
$age=25;

if(!isset($_GET["age"])){
	
	echo $nom ." ".$prenom." ".$age;
}
else {
	echo "error i don't know what's your age";
}



?>