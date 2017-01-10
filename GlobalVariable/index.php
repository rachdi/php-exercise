<?php  
$nom="Rachdi";
$prenom="Bassem";
$age=25;

if(isset($_GET["nom"])){
	echo "votre nom est : $nom";
}
else if(isset($_GET["prenom"])) {
	echo "Votre prenom est :$prenom";
}
else if(isset($_GET["age"])){
	echo "Vous avez $age ans ";
}
else{
	echo "vous etes a la page d'acceuil";
}

?>