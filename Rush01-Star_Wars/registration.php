<?php
	require_once "db.php";
	session_start();
	if (!empty($_SESSION['login_user']) && $_SESSION['login_user'] != "")
	    header('Location: game.php');
	if (isset($_POST) && !empty($_POST)) :
		if (isset($_POST['login'])) :
			$login = $_POST['login'];
		endif;
		if (isset($_POST['email'])) :
			$email = $_POST['email'];
		endif;
		if (isset($_POST['password_1'])) :
			$pass = hash('whirlpool', $_POST['password_1']);
		endif;
		if (isset($_POST['password_2'])) :
			$conf_pass = hash('whirlpool', $_POST['password_2']);
		endif;
		if ($pass != $conf_pass) :
			die("Passwords not match!");
		endif;

		$sql = "INSERT INTO users (login, password) VALUES ('" . $login . "', '" . $pass . "')";
		if (mysqli_query($connect, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($connect);
		}
	endif;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<title>Sign Up</title>
</head>
<body>
	<div class="container">
		<h3>Sign Up</h3>
		<form method="POST" action="">
			<label for="login">Login</label>
			<input type="text" name="login">
			<br />
			<label>Password</label>
			<input type="password" name="password_1">
			<br />
			<label>Confirm password</label>
			<input type="password" name="password_2">
			<br />
			<label>Email</label>
			<input type="email" name="email">
			<br />
			<input type="submit" value="Sign Up">
			<div class="register">
				<a href="login.php">Login</a>
			</div>
		</form>
	</div>
</body>
</html>