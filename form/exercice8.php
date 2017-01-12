<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if(empty($_POST)){



	?>

	<form id="form" action="" method="post" enctype="multipart/form-data">
		<select name="civiliter" id="civiliter">

			<option value="madame" required="required">Mme</option>
			<option value="monsieur">Mr</option>

		</select>
		<label for="nom" required="required">Nom</label>
		<input type="text" name="nom" id="nom" required="required"/><br>
		<label for="prenom">Prenom</label>
		<input type="text" name="prenom" required="required" id="prenom"/><br>

		<input type="hidden" name="MAX_FILE_SIZE" value="100000">
		Fichier : <input type="file" name="avatar">
		<input type="submit" name="envoyer" value="Envoyer le fichier">
	</form>


	<?php 

}
$dossier = '';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.pdf', '.PDF');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) 
{
	$erreur = 'Vous devez uploader un fichier de type pdf...';
}
if($taille>$taille_maxi)
{
	$erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
	
	$fichier = strtr($fichier, 
	'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
	'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
	$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
	if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier))
	{
	echo 'Upload effectué avec succès !';
}
else //Sinon (la fonction renvoie FALSE).
{
	echo 'Echec de l\'upload !';
}
}
else
{
	echo $erreur;
}



if(isset($_POST['civiliter'])){

echo $_POST['civiliter'].'<br />';

}
if(isset($_POST['nom'])){
echo $_POST['nom']."<br />";
}

if(isset($_POST['prenom'])){
echo $_POST['prenom'].'<br />';
}






?>







</body>
</html>