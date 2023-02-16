<?php
session_start();

if(isset($_SESSION['username'])){
	$_SESSION['msg'] = "You must log in first to view this page";
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Links -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css?t=<?php echo(microtime(true).rand()); ?>" type="text/css" />
</head>

<body class="body-price" style="padding: 0; padding-bottom: 5%;"> 
	<div class="">
		<nav class="bob">
			<div class="nav-left">
				<a href="index.php">
					<img src="images/Logo.svg" id="imgLogo" class="logo">
				</a>
				<ul>
					<li><a href="tariff.php">Тарифы</a></li>
					<li><a href="Creators.php">Для креаторов</a></li>
					<li><a href="Price.php">Цены</a></li>
					<li>Ресурсы</li>
				</ul>
			</div>
			<div class="nav-right">
				<div class="search-box">
					<img src="images/search.png">
					<input type="text" placeholder="Найти автора">
				</div>
				<?php if(empty($_SESSION['username'])) { ?>
					<ul>
						<li style="margin-right:10px"><a href="Registration.php">Регистрация</a></li>
						<li><a href="Login.php">Авторизация</a></li>
					</ul>
				<?php } else { ?>
					<div class="nav-user-icon" onclick="settingsMenuToggle()">
						<img src="images/profiles/1.jpg" alt="">
					</div>
				<?php } ?>
			</div>

			<!-- Settings-menu -->
			<div class="settings-menu">
				<!-- Switch btn -->
				<div id="dark-btn">
					<span></span>
				</div>

				<div class="settings-menu-inner">
					<div class="user-profile">
						<img src="images/profiles/1.jpg" alt="">
						<div>
							<p><?php echo $_SESSION['username']; ?></p>
							<a href="profile.php">Profile</a>
						</div>
					</div>
					<hr>
					<div class="user-profile">
						<img src="images/profiles/1.jpg" alt="">
						<div>
							<p>Give Feedback</p>
							<a href="#">Help us to improve the new design</a>
						</div>
					</div>
					<hr>
					<div class="setting-links">
						<img src="images/setting.png" class="settings-icon">
						<a href="#">Setting & Privacy <img src="images/arrow.png" width="10px"></a>
					</div>
					<div class="setting-links">
						<img src="images/help.png" class="settings-icon">
						<a href="#">Help & Support <img src="images/arrow.png" width="10px"></a>
					</div>
					<div class="setting-links">
						<img src="images/display.png" class="settings-icon">
						<a href="#">Display & Accessibility <img src="images/arrow.png" width="10px"></a>
					</div>
					<div class="setting-links">
						<img src="images/logout.png" class="settings-icon">
						<a href="#">Logout <img src="images/arrow.png" width="10px"></a>
					</div>
				</div>
			</div>
		</nav>
		<h1 class="text-center"><?php echo $_SESSION['username'] ?></h1>


	<script src="scripts/script.js"></script>
</body>

</html>