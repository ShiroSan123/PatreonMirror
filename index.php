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

<body class="body"> 
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
	<div class="text-center">
		<h1 class="mt-5">Находите любимых для себя авторов</h1>
		<a href="tariff.php"><button class="btn btn-orange start-btn rounded-pill mt-3 text-white">Начать</button></a>
		<h1>Найдите автора, который вам интересен</h1>
		<div class="search-box mx-auto mt-4" style="background: #f2f2f2;">
			<img src="images/search.png">
			<input type="text" placeholder="Найти автора">
		</div>
		<h1 style="margin-top: 100px;">Что такое <span class="skyes">Sky</span> Flow</h1>
		<p class="col-4 mx-auto">Sky Flow - это платформа для авторов, которые хотят предоставлять доступ к своим работам по подписке и налаживать глубокую связь со своими поклонниками.</p>
		<div class="col-10 mx-auto">
			<div class="row skyflow">
				<div class="col-6 text-center side2">
					<img src="images/Left-side.svg" class="col-12">
					<h1 class="mt-4">Мир, который создаёте вы</h1>
					<h2 class="mx-auto mt-4 text500">Делитесь своими работами напрямую с преданными поклонниками, формируйте сообщество и получайте доход так, как это удобно вам.</h2>
				</div>
				<hr style="display: none;">
				<div class="col-6 text-center side2">
					<img src="images/Right-side.svg" class="col-12">
					<h1 class="mt-4">Подписка, которая работает</h1>
					<h2 class="mx-auto mt-4 text500">Делайте то, что вам нравится, с выгодой для себя и своих поклонников</h2>
				</div>
			</div>
		</div>
		<h1 style="margin-top: 100px;">Кто использует <span class="skyes">Sky</span> flow</h1>
		<h2 class="col-4 mt-4 mx-auto text500">Patreon уже отрыл возможность обрести творческую и финансовую свободу сотням тысяч видеографов, авторов подкастов, музыкантов, писателей, геймеров и других авторов.</h2>
	
	<div class="tabs mx-auto x5carousel">
		<div class="sub-header">
		  	<div class="left mx-auto">
				<div class="tab tab1 active">
					Видеографы
				</div>
				<div class="tab tab2">
					Авторы подкаста
				</div>
				<div class="tab tab3">
					Художники
				</div>
				<div class="tab tab4">
					Музыканты
				</div>
				<div class="tab tab5">
					Все остальное
				</div>
			</div>
		</div>
		<div class="content">
		  <div class="box show" id="box-1">
			<img src="images/1/1.svg">
			<img src="images/1/2.svg">
			<img src="images/1/3.svg">
			<img src="images/1/4.svg">
			<img src="images/1/5.svg">
		  </div>
		  <div class="box" id="box-2">
			<img src="images/2/1.svg">
			<img src="images/2/2.svg">
			<img src="images/2/3.svg">
			<img src="images/2/4.svg">
			<img src="images/2/5.svg">
		  </div>
		  <div class="box" id="box-3">
			<img src="images/3/1.svg">
			<img src="images/3/2.svg">
			<img src="images/3/3.svg">
			<img src="images/3/4.svg">
			<img src="images/3/5.svg">
		  </div>
		  <div class="box" id="box-4">
			<img src="images/4/1.svg">
			<img src="images/4/2.svg">
			<img src="images/4/3.svg">
			<img src="images/4/4.svg">
			<img src="images/4/5.svg">
		  </div>
		  <div class="box" id="box-5">
			<img src="images/5/1.svg">
			<img src="images/5/2.svg">
			<img src="images/5/3.svg">
			<img src="images/5/4.svg">
			<img src="images/5/5.svg">
		  </div>
		</div>
	  </div>

		<h1 class="siub">Готовы настроить подписку?</h1>
		<a href="tariff.php"><button class="btn btn-orange start-btn rounded-pill mt-3 text-white">Начать</button></a>
		
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