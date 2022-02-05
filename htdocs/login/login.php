<?php

	include("../config.php");

	$cookieAuth = false;

	foreach ($users as $key => $value) {
		if (md5($_GET["login"].$_GET["password"]) == md5($key.$value)) {
			$cookieAuth = true;
		}
	}
	if ($cookieAuth) {
		setcookie("auth", md5($_GET["login"].$_GET["password"]), array(
			"path"=>"/"
		));
	}
	header("Location: ". APP_URL . "login")

 ?>