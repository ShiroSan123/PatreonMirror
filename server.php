<?php
session_start();

$username = "";
$email = "";

$errors = array();

// Connect to db
$db = mysqli_connect('localhost','root','','PatreonMirror') or die("could not connect to db");

// Register user
if(isset($_POST['reg_user'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// Form validation
	if(empty($username)) {array_push($errors, "Username is required");};
	if(empty($email)) {array_push($errors, "Email is required");};
	if(empty($password_1)) {array_push($errors, "Password is required");};
	if($password_1 != $password_2){array_push($errors, "Passwords do not match");};

	// Check db for existing user with same username

	$user_check_query = "SELECT * FROM User WHERE username = '$username' or email = '$email' LIMIT 1";

	$results = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if($user) {
		if($user['username'] === $username){array_push($errors, "Username already exists");}
		if($user['email'] === $email){array_push($errors, "This mail already has a registered username");}
	}

	// Register user if no error
	if(count($errors)==0){

		$password = ($password_1);
		print $password;
		$query = "INSERT INTO User (username,email,password) VALUES ('$username','$email','$password')";

		mysqli_query($db,$query);
		$_SESSION['Username'] = $username;
		$_SESSION['success'] = "You are now logged in";

		// Transfer to index.php
		header("location: index.php");
	}
}

// Login user
if(isset($_POST['login_user'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password_1']);

	if(empty($username)){
		array_push($errors, "Username is required");
	}
	if(empty($password)){
		array_push($errors, "Password is required");
	}

	if(count($errors) == 0) {
		$password = ($password);
		$query = "SELECT * FROM User WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($db, $query);

		if(mysqli_num_rows($result)){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged is successfully";
			header("location: index.php");
		} else {
			array_push($errors, "Wrong username/password combination. Please try again.");
		}
	}
}
?>