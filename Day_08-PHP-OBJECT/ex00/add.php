<?php
	session_start();
	if (!empty($_SESSION['login']) && $_SESSION['login'] != "")
	{
		header('Location: loby.php');
	}

	if ($_POST['submit'] === "OK")
	{
		
	}

	
?>