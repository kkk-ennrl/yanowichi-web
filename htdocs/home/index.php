<?php
	
	include("../config.php");

	$auth = false; if (isset($_COOKIE['auth'])) {	foreach ($users as $key => $value) { if (md5($key.$value) == $_COOKIE['auth']) { $auth = true;}}}

	header("Location: /home/day")

 ?>