<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/game.css">
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