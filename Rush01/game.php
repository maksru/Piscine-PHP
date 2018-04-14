<?php
	require_once "class/Map.class.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/game.css">
	<title>Warhammer</title>
</head>
<body>

	<div id="user_1">
		<div id="user_logo_1">
			<img src="img/dart.png">
		</div>
		<a href="logout.php" style="color: red">Logout</a>
	</div>

	<table border="2">
		<?php
			echo Map::create_map();
		?>
	</table>

	<div id="user_2">
		<div id="user_logo_2">
			<img src="img/dart.png">
		</div>
		<a href="logout.php" style="color: red">Logout</a>
	</div>
</body>
</html>