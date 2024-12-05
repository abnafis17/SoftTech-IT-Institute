<?php
	session_start();

	require_once('function.php');

	if(!logged_in()){
		header('location: index.php');
	}

	if(isset($_POST['chatupdate'])){

		$email = $_SESSION['email'];

		$message = $_POST['message'];

		$insert = $connection->query("INSERT INTO conversation (email, message) VALUES('$email','$message')");

		die();
	}

	if(isset($_POST['updatemessage'])){
		$message = $connection->query("SELECT * FROM conversation");

		while($rows = mysqli_fetch_assoc($message)){
			$em = $rows['email'];
			$query = mysqli_query($connection, "SELECT * FROM users WHERE email = '$em'");
			$queryvalue = mysqli_fetch_assoc($query );

			echo '<p><span class="fullname">'.$queryvalue['firstname'].' '.$queryvalue['lastname'].': </span>'.$rows['message'].'</p>';
		}

		die();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chatroom</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<div class="chat box">
			<div class="squarebox">
				
					
				
			</div>
			<form action="" method="POST" class="sendmessage">
				<input class="r-input message" type="text" name="message" placeholder="Type your message">
				<input type="submit" value="send" name="send">
			</form>
		</div>


		<div class="logout"><a href="logout.php">Logout</a></div>

		<script src="js/jquery.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>