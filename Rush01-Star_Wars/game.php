<?php

	require_once("vc_classes/main.php");

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
		<div>
			<?php

				require_once "control_buttons.php";

			?>
			<form id="" action="game.php" method="post">
				<button name="usr1" value="turnLeft">Turn left</button>
				<button name="usr1" value="turnRight">Turn right</button>
				<button name="usr1" value="move">Move</button>
				<button name="usr1" value="fireSh">Fire short-range</button>
				<button name="usr1" value="fireMid">Fire mid-range</button>
				<button name="usr1" value="fireLong">Fire long-range</button>
				<?php

					if ($gz->players[0]->turnFinished)
						echo '<p>Finished</p>';

				?>
				<button name="usr1" value="finished">Finish</button>
				<p>Speed: <?php echo $gz->players[0]->ships[0]->speed ?></p>
				<p>Power: <?php echo $gz->players[0]->ships[0]->power ?></p>
				<p>Shield: <?php echo $gz->players[0]->getFullHealth() ?></p>
				<button name="kill" value="kill">Kill</button>
				<?php

					if ((isset($_POST["usr2"]) && $_POST["usr2"] == "fireSh") ||
						(isset($_POST["usr2"]) && $_POST["usr2"] == "fireMid") ||
						(isset($_POST["usr2"]) && $_POST["usr2"] == "fireLong") ) {
						echo '<p>Your opponent cause "' . $gz->players[1]->ships[0]->weapons[0]->fire() . '" to you!</p>';
					}

				?>
			</form>
		</div>
		<a href="logout.php" style="color: red">Logout</a>
	</div>

	<table border="2">
		<?php

			require_once "create_map.php";
			create_map( $gz );

		?>
	</table>
	<div id="user_2">
		<div id="user_logo_2">
			<img src="img/dart.png">
		</div>
		<div>
			<form id="" action="game.php" method="post">
				<button name="usr2" value="turnLeft">Turn left</button>
				<button name="usr2" value="turnRight">Turn right</button>
				<button name="usr2" value="move">Move</button>
				<button name="usr2" value="fireSh">Fire short-range</button>
				<button name="usr2" value="fireMid">Fire mid-range</button>
				<button name="usr2" value="fireLong">Fire long-range</button>
				<?php

					if ($gz->players[1]->turnFinished)
						echo '<p>Finished</p>';
				?>

				<button name="usr2" value="finished">Finish</button>
				<p>Speed: <?php echo $gz->players[1]->ships[0]->speed ?></p>
				<p>Power: <?php echo $gz->players[1]->ships[0]->power ?></p>
				<p>Shield: <?php echo $gz->players[1]->getFullHealth() ?></p>
				<button name="kill" value="kill">Kill</button>
				<?php

					if ((isset($_POST["usr1"]) && $_POST["usr1"] == "fireSh") ||
						(isset($_POST["usr1"]) && $_POST["usr1"] == "fireMid") ||
						(isset($_POST["usr1"]) && $_POST["usr1"] == "fireLong") ) {
						echo '<p>Your opponent cause "' . $gz->players[0]->ships[0]->weapons[0]->fire() . '" to you!</p>';
					}

				?>
			</form>
			<?php

				require_once "control_buttons.php"

			?>
		</div>
		<a href="logout.php" style="color: red">Logout</a>
	</div>
</body>
</html>