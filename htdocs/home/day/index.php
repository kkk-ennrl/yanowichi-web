<?php include("../../config.php") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo APP_ENCODING; ?>">
	<title><?php echo APP_TITLE; ?> - Сегодняшнее расписание</title>
	<script type="text/javascript" src="<?php echo APP_URL; ?>scripts/rp-day.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL;?>styles/home-day.css">
	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL;?>styles/fonts.css">
</head>
<body onload="setRP('default_pn')">

	<div class="menu-box">
		
		<div class="img-logo"></div>

		<div class="menu">
			<span class="rp-day" onclick="document.location.href = '<?php echo APP_URL;?>home/day'">Рассписание на сегодня</span>
			<span class="rp-admin" onclick="document.location.href = '<?php echo APP_URL;?>admin'">Панель управления</span>
		</div>

	</div>

	

	

	<div class="content">
		
	</div>

</body>
</html>