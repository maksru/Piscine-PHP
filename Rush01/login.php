<?php
	require_once "db.php";
	session_start();
	if (!empty($_SESSION['login_user']) && $_SESSION['login_user'] != "")
	    header('Location: game.php');
	if (isset($_POST) && !empty($_POST)) :
		if (isset($_POST['login'])) :
			$login = $_POST['login'];
		endif;
		if (isset($_POST['password'])) :
			$password = hash('whirlpool', $_POST['password']);;
		endif;
		$sql = "SELECT * FROM users WHERE login='" . $login . "'";
		$result = mysqli_query($connect, $sql);
		if (mysqli_num_rows($result) > 0) :
			$row = mysqli_fetch_assoc($result);
		else :
			die("ERROR: Wrong Login.");
		endif;
		if ($row['password'] != $password) :
			die("ERROR: Wrong password.");
		endif;
		$_SESSION['login_user'] = $row;
	endif;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Sign In</title>
</head>
<body>
	<div class="container">
		<h3>Sign In</h3>
		<form method="POST" action="login.php">
			<label for="login">Login</label>
			<input type="text" id="login" name="login" required>
			<br />
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			<br />
			<input type="submit" value="Sign In">
			<div class="register">
				<p>Not register? <a href="registration.php">Create an account</a></p>
			</div>
		</form>
	</div>
</body>
</html>