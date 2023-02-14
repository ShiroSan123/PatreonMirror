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
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="main-layout">
		<header class="primary-header bg-primary col-12 bg-blue text-center text-white" style="height: 100px;">
			
		</header>

		<main class="col-10 mx-auto tr text-center">
			<a href="Registration.php">Registration</a>
			<h1>This is the homepage</h1>
			<?php 
				if(isset($_SESSION['success'])) : 
			?>
			<div>
				<h3>

					<?php 

						echo $_SESSION['success'];
						unset($_SESSION['success']);

					?>

				</h3>
			</div>
			<?php endif ?>
			
			<!-- If the user logs in print information about him -->

			<?php if(isset($_SESSION['username'])) : ?>
			<h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
			
			<button><a href="index.php?logout='1'"></a></button>

			<?php endif ?>
		</main>

		<footer class="col-12 bg-primary text-center" style="height: 100px;">
			<p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
		</footer>
	</div>
</body>

</html>