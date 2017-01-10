
<?php  
$nom="Namare";
$prenom="Jean";


if(isset($_GET["nom"])){
	
	echo $nom ;
}
else if(isset($_GET["prenom"])){
	echo $prenom ;
}
else {
	echo "we are in home put the following url and see !";
}


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>paramurl</title>
</head>
<body>

	<li><a href="index.php?nom">nom</a></li>
	<li><a href="index.php?prenom">prenom</a></li>


</body>
</html>
