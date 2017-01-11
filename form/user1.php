<?php 
$nom =null;
$prenom=null;
if(isset($_GET["nom"]) && isset($_GET["prenom"])){
	echo "Bienvenue".$_GET["nom"]." " .$_GET["prenom"]."Vous etes le 100 eme visiteur  vous avez gagné un cadeau " ;
}

?>