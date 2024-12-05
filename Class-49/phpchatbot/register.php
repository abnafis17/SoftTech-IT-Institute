<?php
	require_once('function.php');
	session_start();

	if(logged_in()){
		header('location: chat.php');
	}

	if(isset($_POST['register'])){

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$exsitemail = $connection->query("SELECT * FROM users WHERE email = '$email'");

		if(mysqli_num_rows($exsitemail) >= 1){
			echo "Email already exists!";
		}else {
			$query = $connection->query("INSERT INTO users (firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')");

			if($query){
				echo "You have been registered successfully!";
			}
		}

		die();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<div class="box">
			<h2 class="r-heading">Create an Account</h2>
			<form action="" method="POST" class="userregistration">
				<input class="r-input" type="text" placeholder="First Name" name="fname">
				<input class="r-input" type="text" placeholder="Last Name" name="lname">
				<input class="r-input" type="email" placeholder="Email" name="email">
				<input class="r-input" type="text" placeholder="Password" name="pass">

				<input type="submit" value="Register" name="register">
			</form>
			<p class="success"></p>
			<p>Already have an Account? If yes, please <a class="login" href="login.php">Login</a></p>
		</div>


		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>