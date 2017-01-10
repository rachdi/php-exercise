<?php 
function get_browser_name($user_agent)
{
	if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
	elseif (strpos($user_agent, 'Edge')) return 'Edge';
	elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
	elseif (strpos($user_agent, 'Safari')) return 'Safari';
	elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
	elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';

	return 'Other';
}

// Usage:


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Votre navigateur est :<?=get_browser_name($_SERVER['HTTP_USER_AGENT']); ?>
		<h1>Votre adresse Ip est :<?=$_SERVER["REMOTE_ADDR"];?>
			<h1>Votre serveur est  :<?=$_SERVER['SERVER_NAME'];?>


			</body>
			</html>