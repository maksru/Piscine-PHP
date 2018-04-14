<?php
	class Map
	{
		public function create_map()
		{
			$square = 0;
			for ($i = 0; $i <= 150; $i++) 
			{ 
				echo '<tr id=' . $i .'>';
				for ($j = 0; $j <= 100; $j++) 
				{
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
						$j += 4;
					}

					if ($i == 100 && $j == 65) 
					{
						echo '<td id=' . $square .' " colspan="5" rowspan="5"><img src="img/asteroid_2.gif" alt="Стероид"></td>';
						$j += 4;
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
	}  
?>