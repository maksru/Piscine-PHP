<?PHP
	session_start();
	require_once '../class/Game.class.php';
	header("Content-Type: application/json");

	if ($_GET['action']) 
	{
		$action = $_GET['action'];
		echo ("OK");
		header("HTTP/1.0 200 OK");
	}
	else 
	{
		header("HTTP/1.0 401 Unauthorized");
	}
?>