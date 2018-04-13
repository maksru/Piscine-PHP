<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
	<script src="js/game.js"></script>
	<link rel="stylesheet" type="text/css" href="css/game.css">
	<link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<title>Warhammer</title>
</head>
<body>
		<table border="2">
			<?php
				$square = 0;
				for ($i = 0; $i < 150; $i++) 
				{ 
				  	echo ('<tr id=' . $i .'>');
				  	for ($j = 0; $j < 100; $j++) 
				  	{
				  		echo ('<td id=' . $square .'></td>');
				  		$square++;
				  	}
				  	echo ('</tr>');
				}  
			?>
		</table>
</body>
</html>