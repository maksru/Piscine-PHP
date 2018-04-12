<?php
	session_start();
	if (!empty($_SESSION['login_user']) && $_SESSION['login_user'] != "")
	    header('Location: game.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container">
		<h3>Sign In</h3>
		<form method="POST" action="login.php">
			<label for="login">Login</label>
			<input type="text" id="login" name="login" required>
			<br />
			<label for="password">Password</label>
			<input type="password" id="password" name="password">
			<br />
			<input type="submit" value="Sign In">
			<div class="register">
				<p>Not register? <a href="#">Create an account</a></p>
			</div>
		</form>

		<?php
			if (!empty($_POST['login']) && !empty($_POST['password'])) 
			{
		        if (auth($_POST['login'], $_POST['password'])){
		            $_SESSION['login_user'] = $_POST['login'];
		            header('Location: game.php');
		        }
		        else
		            echo "<div class=\"alert alert-danger\" role=\"alert\">Error: Incorrect data entered</div>";
	    	}
	    	else
	        	$_SESSION['login_user'] = "";

	        function auth($login, $password) {
	        if (!$login || !$password)
	            return false;
	        $sql = new mysqli(SQL_HOST, SQL_USER, SQL_PASS, SQL_DB);
	        $sql->set_charset('utf8');
	        if ($sql->connect_error)
	            die("Connection failed: " . $sql->connect_error);
	        $result = $sql->query("SELECT `login`, `password` FROM `users` WHERE `login`=\"$login\"");
	        if ($result->num_rows > 0) {
	            $row = $result->fetch_assoc();
	            if ($row['password'] == hash('md5', $password)) {
	                return true;
	            }
	        }
	        return false;
		?>
	</div>
</body>
</html>