<?php
	function create_map( $gz ) {
		$square = 0;
		for ($i = 0; $i <= 150; $i++) 
		{ 
			echo '<tr id=' . $i .'>';
			for ($j = 0; $j <= 100; $j++) 
			{
				if ($i == $gz->players[0]->ships[0]->position[0] && $j == $gz->players[0]->ships[0]->position[1]) {

					if ($gz->players[0]->ships[0]->rotation == 0)
						$deg = 0;
					if ($gz->players[0]->ships[0]->rotation == 1)
						$deg = 90;
					if ($gz->players[0]->ships[0]->rotation == 2)
						$deg = 180;
					if ($gz->players[0]->ships[0]->rotation == 3)
						$deg = 270;
					echo '<td id="player1"><img src="' . $gz->players[0]->ships[0]->sprite . '" alt="Player1" style="transform: rotate(' . $deg . 'deg);"></td>';
					$j++;
				}
				if ($i == $gz->players[1]->ships[0]->position[0] && $j == $gz->players[1]->ships[0]->position[1]) {

					if ($gz->players[1]->ships[0]->rotation == 0)
						$deg = 0;
					if ($gz->players[1]->ships[0]->rotation == 1)
						$deg = 90;
					if ($gz->players[1]->ships[0]->rotation == 2)
						$deg = 180;
					if ($gz->players[1]->ships[0]->rotation == 3)
						$deg = 270;
					echo '<td id="player2"><img src="' . $gz->players[1]->ships[0]->sprite . '" alt="Player2" style="transform: rotate(' . $deg . 'deg);"></td>';
					$j++;
				}

				if (isset($_SESSION['fireTrace']) && $_SESSION['fireTrace'] != "") {

					foreach ($_SESSION['fireTrace'] as $cell) {
						if ($i == $cell[1] && $j == $cell[0]) {
							echo '<td class="fireTraceCell"><img src="./img/fire.png" alt="Fire"></td>';
							$j++;
						}
					}
					$_SESSION['traceFlag'] = "put";
				}
				
				if ($i == 10 && $j == 50) 
				{
					echo '<td id=' . $square .' " colspan="5" rowspan="5"><img src="img/asteroid.png" alt="Стероид"></td>';
					$j += 5;
				}
				if ($i == 20 && $j == 35) 
				{
					echo '<td id=' . $square .' " colspan="5" rowspan="5"><img src="img/asteroid_2.gif" alt="Стероид"></td>';
					$j += 5;
				}
				if ($i == 50 && $j == 20) 
				{
					echo '<td id=' . $square .' " colspan="5" rowspan="5"><img src="img/asteroid.png" alt="Стероид"></td>';
					$j += 5;
				}
				if ($i == 75 && $j == 60) 
				{
					echo '<td id=' . $square .' " colspan="5" rowspan="5"><img src="img/asteroid4 2.png" alt="Стероид"></td>';
					$j += 5;
				}
				if ($i == 85 && $j == 55) 
				{
					echo '<td id=' . $square .' " colspan="5" rowspan="5"><img src="img/asteroid_2.gif" alt="Стероид"></td>';
					$j += 5;
				}
				if ($i == 100 && $j == 65) 
				{
					echo '<td id=' . $square .' " colspan="5" rowspan="5"><img src="img/asteroid_2.gif" alt="Стероид"></td>';
					$j += 5;
				}
				if ($i == 120 && $j == 30) 
				{
					echo '<td id=' . $square .' " colspan="5" rowspan="5"><img src="img/asteroid_2.gif" alt="Стероид"></td>';
					$j += 4;
				}
				else 
				{
					if ($i > 10 && $i <= 14 && $j >= 50 && $j < 55)
						$j += 5;
					if ($i > 20 && $i <= 24 && $j >= 35 && $j < 40)
						$j += 5;
					if ($i > 50 && $i <= 54 && $j >= 20 && $j < 25)
						$j += 5;
					if ($i > 75 && $i <= 79 && $j >= 60 && $j < 65)
						$j += 5;
					if ($i > 85 && $i <= 89 && $j >= 55 && $j < 60)
						$j += 5;
					if ($i > 100 && $i <= 104 && $j >= 65 && $j < 70)
						$j += 5;
					if ($i > 120 && $i <= 124 && $j >= 30 && $j < 35)
						$j += 5;

					echo '<td id=' . $square .'></td>';
				}
				$square++;
			}
			echo '</tr>';
		}
	}

?>