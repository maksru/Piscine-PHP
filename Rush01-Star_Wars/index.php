<?php
	session_start();

	if ($_SESSION['login_user'] != NULL && $_SESSION['login_user'] != "")
    	header('Location: game.php');
	else
    	header('Location: login.php'); 
?>