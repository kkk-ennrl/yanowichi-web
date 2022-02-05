<?php include("../config.php"); ?>
<?php if (!isset($_GET["src"])) {header("Location: ".APP_URL."admin/?src=home");} ?>
<?php $auth = false; if (isset($_COOKIE['auth'])) {	foreach ($users as $key => $value) { if (md5($key.$value) == $_COOKIE['auth']) { $auth = true;}}} ?>
<?php if (!$auth) {header("Location: ".APP_URL."login");} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo APP_ENCODING; ?>">
	<title><?php echo APP_TITLE; ?> - Панель управления</title>
	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL; ?>styles/admin.css">
	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL; ?>styles/fonts.css">
	<script type="text/javascript" src="<?php echo APP_URL; ?>scripts/rp.js"></script>	
	<script type="text/javascript">
		let admin = {};
		admin.gets = {};
		admin.gets.src = "<?php echo $_GET["src"]; ?>";

	</script>
	<script type="text/javascript" src="<?php echo APP_URL; ?>scripts/admin.js"></script>
</head>
<body onload="startAdmin()">
<div class="bg"></div>
	<div class="menu">
		<div class="header"><?php echo APP_TITLE;?><span>Панель управления</span></div>
		<div class="home-button button-menu <?php if ($_GET["src"] == "home") {echo "selected"; } ?>" onclick="document.location.href = '<?php echo APP_URL; ?>admin/?src=home'">
			<img src="<?php echo APP_URL; ?>img/home.png">
			<span class="text">Главная</span>
		</div>
		<div class="teachers-button button-menu <?php if ($_GET["src"] == "teachers") {echo "selected"; } ?>" onclick="document.location.href = '<?php echo APP_URL; ?>admin/?src=teachers'">
			<img src="<?php echo APP_URL; ?>img/users.png">
			<span class="text">Учителя</span>
		</div>
		<div class="lessons-button button-menu <?php if ($_GET["src"] == "lessons") {echo "selected"; } ?>" onclick="document.location.href = '<?php echo APP_URL; ?>admin/?src=lessons'">
			<img src="<?php echo APP_URL; ?>img/users.png">
			<span class="text">Уроки</span>
		</div>
	</div>

<?php  if ($_GET["src"] == "home") : ?>

	<div class="content">
		<span class="title">Главная</span>
		<span class="title-day">Загрузка...</span>
	    <div class="rp-b">
	    	
	    </div>
	</div>

<?php endif; ?>
<?php  if ($_GET["src"] == "teachers") : ?>

	<div class="content">
		<span class="title">Учителя</span>
		<div class="teachers-list">
			<ul class="short-list">
				<li>Дудник Надежда Николаевна</li>
				<li>Сазонова Елена Николаевна</li>
				<li>Путов Александр Сергеевич</li>
				<li>Тихновецкая Екатерина Николаевна</li>
				<li>Шикарева Наталья Михайловна</li>
				<li>Бакштай Оскана Павловна</li>
				<li>Вашило Александр Михайлович</li>
			</ul>
		</div>
	</div>

<?php endif; ?>
<?php  if ($_GET["src"] == "lessons") : ?>

	<div class="content">
		<span class="title">Уроки</span>
	</div>

<?php endif; ?>

</body>
</html>