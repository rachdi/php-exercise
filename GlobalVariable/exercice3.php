<?php

$data = [
"nom" => $_POST['user'],
'mod de passe' => $_POST['password']
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
		<label for="user">User</label>
		<input type="text" name="user" id="user"/>
		<label for="password">Mot de Passe</label>
		<input type="text" name="password" id="password">

		<input type="submit" value="envoyer">

	</form>	
</body>
</html>





