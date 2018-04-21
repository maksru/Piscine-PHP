<?php
	require_once "db.php";
	session_start();
	if (!empty($_SESSION['login_user']) && $_SESSION['login_user'] != "" && !empty($_SESSION['login_user_1']) && $_SESSION['login_user_1'] != "")
	    header('Location: game.php');
	if (isset($_POST) && !empty($_POST)) :
		if (isset($_POST['login'])) :
			$login = $_POST['login'];
		endif;
		if (isset($_POST['login_1'])) :
			$login_1 = $_POST['login_1'];
		endif;
		if (isset($_POST['password'])) :
			$password = hash('whirlpool', $_POST['password']);
		endif;
		if (isset($_POST['password_1'])) :
			$password_1 = hash('whirlpool', $_POST['password_1']);
		endif;
		$sql = "SELECT * FROM users WHERE login='" . $login . "'";
		$sql_1 = "SELECT * FROM users WHERE login='" . $login_1 . "'";
		$result = mysqli_query($connect, $sql);
		$result_1 = mysqli_query($connect, $sql_1);
		if (mysqli_num_rows($result) > 0) :
			$row = mysqli_fetch_assoc($result);
		else :
			die("ERROR: Wrong Login.");
		endif;
		if (mysqli_num_rows($result_1) > 0) :
			$row_1 = mysqli_fetch_assoc($result_1);
		else :
			die("ERROR: Wrong Login_1");
		endif;
		if ($row['password'] != $password) :
			die("ERROR: Wrong password.");
		endif;
		if ($row_1['password_1'] != $password_1) :
			die("ERROR: Wrong password.");
		endif;
		if (!isset($password) && !isset($password_1))
			die("ERROR: Wrong password.");
		$_SESSION['login_user'] = $row;
		$_SESSION['login_user_1'] = $row_1;
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
			<label for="login">User_1</label>
			<input type="text" id="login" name="login" required>
			<br />
			<label for="password">Password_1</label>
			<input type="password" id="password" name="password" required>
			<br />
			<label for="login_1">User_2</label>
			<input type="text" id="login_1" name="login_1" required>
			<br />
			<label for="password_1">Password_2</label>
			<input type="password" id="password_1" name="password-1" required>
			<br />
			<input type="submit" value="Sign In">
			<div class="register">
				<p>Not register? <a href="registration.php">Create an account</a></p>
			</div>
		</form>
	</div>
</body>
</html>