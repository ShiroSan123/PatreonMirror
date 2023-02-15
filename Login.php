<?php include('server.php') ?>
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

<body>
	<div class="main-layout">
		<header class="primary-header bg-primary col-12 bg-blue text-center text-white" style="height: 100px;">
			
		</header>

		<main class="col-10 mx-auto tr text-center">
			<div class="col-6 mx-auto border regis">
				<form class="contact-form" action="Login.php" method="post">
					<h1>Log In</h1>
					<div class="form-group">
						<input name="username" type="text" placeholder="Username :" required>
					</div>

					<div class="form-group">
						<input name="password_1" type="password" placeholder="Password : " required>
					</div>

					<button type="submit" class="btn rounded-pill" name="login_user">Log In</button>

					<p>Not a user?<a href="Registration.php"><b>Register Here</b></a></p>
				</form>
			</div>
			
		</main>

		<footer class="col-12 bg-primary text-center" style="height: 100px;">
			<p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
		</footer>
	</div>
</body>

</html>