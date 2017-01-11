<?php
$dayinpass = "2016-05-16";
$today = time();
$dayinpass= strtotime($dayinpass);
echo round(abs($today-$dayinpass)/60/60/24);