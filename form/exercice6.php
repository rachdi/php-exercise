<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if(empty($_POST)){



		?>

		<form id="form" action="" method="post">
			<select name="civiliter" id="civiliter">
				<option value="madame">Mme</option>
				<option value="monsieur">Mr</option>

			</select>
			<label for="nom">Nom</label>
			<input type="text" required="required" name="nom" id="nom"/><br>
			<label for="prenom">Prenom</label>
			<input type="text" required="required" name="prenom" id="prenom"/><br>

			<input type="file" required="required" name="file" />


			<input type="submit" value="envoyer">
		</form>

		<?php 

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
	if(isset($_POST['file'])){
		echo $_POST['file'].'<br />';
	}



	?>







</body>
</html>