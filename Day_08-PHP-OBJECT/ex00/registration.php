<?php
	require "db"  
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
		<form method="POST" action="add.php">
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