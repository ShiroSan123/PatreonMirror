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

		<main class="price3grid">
			<div class="col-10 mx-auto">
				<div class="row">
					<div class="colum border mx-auto">
						<div class="text-center namePrice">
							<h1>Lite</h1>
							<h5>Простые инструменты для настройки регулярной поддержки от подписчиков.</h5>
						</div>
						<hr>
						<div class="proce">
							<h1>5%</h1>
							<h5>вашего месячного дохода на Sky Flow</h5>
						</div>
						<hr>
						<div class="checkMarks">
							<h5><img src="images/Check.svg">Страница креатора на Sky Flow</h5>
							<h5><img src="images/Check.svg">Страница креатора на Sky Flow</h5>
							<h5><img src="images/Check.svg">Страница креатора на Sky Flow</h5>
						</div>
						<div class="btns text-center">
							<a><button class="btn btn-orange start-btn rounded-pill mt-3 text-white">Начать</button></a>
							<a href="#" class="mt-2">Подробнее</a>
						</div>
					</div>
					<div class="colum border mx-auto">
						<div class="text-center namePrice">
							<h1>Pro</h1>
							<h5>Всё необходимое для создания процветающего бизнеса на основе подписки, который будет приносить ощутимый доход вам и радовать ваших верных подписчиков</h5>
						</div>
						<hr>
						<div class="proce">
							<h1>8%</h1>
							<h5>вашего месячного дохода на Sky Flow</h5>
						</div>
						<hr>
						<div class="checkMarks">
							<h5 class="fw-semibold"><img src="images/Check.svg">Все преимущества Lite, а также...</h5>
							<h5><img src="images/Check.svg">Уровни подписки</h5>
							<h5><img src="images/Check.svg">Статистика и аналитика</h5>
							<h5><img src="images/Check.svg">Рекламный инструмент для акций</h5>
							<h5><img src="images/Check.svg">Мастер классы</h5>
							<h5><img src="images/Check.svg">Служба поддержки</h5>
						</div>
						<div class="btns text-center">
							<a><button class="btn btn-orange start-btn rounded-pill mt-3 text-white">Начать</button></a>
							<a href="#" class="mt-2">Подробнее</a>
						</div>
					</div>
					<div class="colum border mx-auto">
						<div class="text-center namePrice">
							<h1>Premium</h1>
							<h5>Индивидуальное обучение и поддержка для признанных авторов и владельцев бизнеса, а также дополнительные возможности, которые помогут сэкономить время и вознаградить подписчиков</h5>
						</div>
						<hr>
						<div class="proce">
							<h1>12%</h1>
							<h5>вашего месячного дохода на Sky Flow</h5>
						</div>
						<hr>
						<div class="checkMarks">
							<h5 class="fw-semibold"><img src="images/Check.svg">Все преимущества Pro, а также...</h5>
							<h5><img src="images/Check.svg">Личный консультант</h5>
							<h5><img src="images/Check.svg">Сувенирная продукция для подписчиков</h5>
							<h5><img src="images/Check.svg">Аккаунты для команды</h5>
							<h5><img src="images/Check.svg">Мастер классы</h5>
							<h5><img src="images/Check.svg">Служба поддержки</h5>
						</div>
						<div class="btns text-center">
							<a><button class="btn btn-orange start-btn rounded-pill mt-3 text-white">Начать</button></a>
							<a href="#" class="mt-2">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>


	<script src="scripts/script.js"></script>
</body>

</html>