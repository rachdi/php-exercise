<?php

$data = [
"nom" => $_POST['user'],
'mod de passe' => $_POST['password'],
'mot de passe confirmer' => $_POST['confirmpassword']
];

$hello = json_encode($data);




file_put_contents('data.json', $hello);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formilaire</title>
</head>
<body>
	<form action="" method="post">
		<label for="user">User</label></br>
		<input type="text" name="user" id="user"/></br>
		<label for="password">Mot de Passe</label></br>
		<input type="password" name="password" id="password"></br>
		<label for="confirmpassword">	Confirmer votre mot de passe</label></br>
		<input type="confirmpassword" name="confirmpassword" id="confirmpassword"></br>

		<input type="submit" value="envoyer">

	</form>	
</body>
</html>





