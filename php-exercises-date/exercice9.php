<?php 
include 'calender.php';



?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calendrier</title>
</head>
<body>
	<form action="calender.php" method="post">
		<select name="mois" id="calendrier">
			<option value="">choisissez un mois</option>
			<option value="01">janvier</option>
			<option value="02">février</option>
			<option value="03">mars</option>
			<option value="04">avril</option>
			<option value="05">mai</option>
			<option value="06">juin</option>
			<option value="07">juillet</option>
			<option value="08">aout</option>
			<option value="09">septembre</option>
			<option value="10">octobre</option>
			<option value="11">novembre</option>
			<option value="12">décembre</option>

		</select>
		<select name="annee" id="calendrier">
			<option value="">choisissez l'annee</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			
		</select>


		<input type="submit" value="regarder la calendrier"/>

	</form>


</body>
</html>