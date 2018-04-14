<?php
	session_start();
	session_destroy();
	$_SESSION['login_user'] = "";
	header('Location: login.php');
?>