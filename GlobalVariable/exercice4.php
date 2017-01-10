<?php
$json = file_get_contents('data.json');
$user = json_decode($json, true);
foreach ($user as $key => $value) {
	echo "$key :$value</br>";
	
}

?>




