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

<body style="padding: 0;"> 
	<nav class="border-bottom ">
		<div class="nav-left">
			<a href="index.php">
				<img src="images/Logo.svg" class="logo">
			</a>
			<ul>
				<li><a href="tariff.php">Тарифы</a></li>
				<li>Для креаторов</li>
				<li>Цены</li>
				<li>Ресурсы</li>
			</ul>
		</div>
		<div class="nav-right">
			<div class="search-box">
				<img src="images/search.png">
				<input type="text" placeholder="Найти автора">
			</div>
			<div class="nav-user-icon" onclick="settingsMenuToggle()">
				<img src="images/profiles/1.jpg" alt="">
			</div>
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
						<p>Renat</p>
						<a href="profile.php☺">Profile</a>
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
	<div class="main-tariff1">
		<div class="row-tariff mx-auto">
			<img src="images/tarif1.svg">
			<div class="block-taf">
				<h3>Sky Flow Lite</h3>
				<h1>Только самое основное</h1>
				<p>Простые инструменты для настройки регулярной поддержки от подписчиков и ведения бизнеса на основе подписки.</p>
				<button class="btn btn-orange start-btn rounded-pill mt-3 text-white">Начать</button>
			</div>
		</div>
	</div>
	<div class="main-tariff2">
		<div class="row-tariff mx-auto">
			<img src="images/tarif2.svg">
			<div class="block-taf">
				<h3>Sky Flow PRO</h3>
				<h1>Все инструменты для управления подписками</h1>
				<p>Создайте процветающий бизнес на основе подписки, которая будет приносить ощутамый доход вам и радовать ваших подписчиков.</p>
				<button class="btn btn-orange start-btn rounded-pill mt-3 text-white">Начать</button>
			</div>
		</div>
	</div>
	<div class="main-tariff3">
		<div class="row-tariff mx-auto">
			<img src="images/tarif3.svg">
			<div class="block-taf">
				<h3>Sky Flow Premiun</h3>
				<h1>Для профессионалов креативного бизнеса</h1>
				<p>Все преимущества тарифа PRO, а также еще больше возможностей для работы с платформой</p>
				<button class="btn btn-orange start-btn rounded-pill mt-3 text-white">Начать</button>
			</div>
		</div>
	</div>
		
	<!-- <div class="main-layout">

		<header class="primary-header bg-primary col-12 bg-blue text-center text-white" style="height: 100px;">
			
		</header>

		<main class="col-10 mx-auto tr text-center">
			<?php if(empty($_SESSION['username'])) { ?>
				<a href="Registration.php">Registration</a>
			<?php } else { ?>
				
			<?php } ?>
			<h1>This is the homepage</h1>
			<?php if(isset($_SESSION['success'])) : ?>
			<div>
				<h3>
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
			<?php endif ?> -->
			
			<!-- If the user logs in print information about him -->

			<!-- <?php if(isset($_SESSION['username'])) : ?>
			<h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
			
			<button class="btn☺"><a href="index.php?logout='1'">Logout</a></button>

			<?php endif ?>
		</main>

		<footer class="col-12 bg-primary text-center" style="height: 100px;">
			<p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
		</footer>
	</div> -->
	
	<script src="scripts/script.js"></script>
</body>

</html>