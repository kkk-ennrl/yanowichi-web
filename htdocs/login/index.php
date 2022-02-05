<?php include("../config.php"); $auth = false; if (isset($_COOKIE['auth'])) {	foreach ($users as $key => $value) { if (md5($key.$value) == $_COOKIE['auth']) { $auth = true;}}}?>
<?php if ($auth) {header("Location: ".APP_URL."admin");}?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo APP_ENCODING?>">
	<title><?php echo APP_TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL; ?>styles/login.css">
	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL; ?>styles/fonts.css">
	<script type="text/javascript" src="<?php echo APP_URL; ?>scripts/info.js"></script>
	<script type="text/javascript" src="<?php echo APP_URL; ?>scripts/login.js"></script>
</head>
<body>

	<div class="yanowichi-web-root-bg"></div>

	<div class="me-krendel-copy" onclick="showInfo()"></div>

	<div class="yanowichi-web-root-login-box">
		<span class="yanowichi-web-root-login-box-title"><?php echo APP_TITLE; ?></span>
		<input type="text" name="yanowichi-web-login-form" id="login-form-login" placeholder="Введите логин">
		<input type="password" name="yanowichi-web-login-form" id="login-form-password" placeholder="Введите пароль">
		<button class="yanowichi-web-root-login-box-button" onclick="loginToAccount();">Войти</button>
	</div>


</body>
</html>