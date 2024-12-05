<?php
	require_once('function.php');

	session_start();

	if(logged_in()){
		header('location: chat.php');
	}

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = $connection->query("SELECT * FROM users WHERE email = '$email'");
		$fetch = mysqli_fetch_assoc($query);
		$matchpass = $fetch['password'];

		$firstname = $fetch['firstname'];
		$lastname = $fetch['lastname'];

		if($matchpass == $password){
			$_SESSION['login'] = 'successfull';

			$_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
			$_SESSION['email'] = $email;

			header('location: chat.php');
		}
		die();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<div class="box">
			<h2 class="r-heading">Login</h2>
			<form action="" method="POST" class="userlogin">
				<input class="r-input" type="email" placeholder="Email" name="email">
				<input class="r-input" type="text" placeholder="Password" name="password">

				<input type="submit" value="Login" name="login">
			</form>
			<p><a class="registration" href="register.php">Create an Account</a></p>
		</div>


		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>