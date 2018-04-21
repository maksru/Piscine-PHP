<?php

function fireTraceFinder( $gz, $player, $position, $range ) {

	$fireTrace = array();
	if ($player->ships[0]->rotation == 0) {
		for($i = 1; $i <= $range && $position[0] - $i >= 0; $i++) {
			$res = $gz->onPlace($position[1], $position[0] - $i);
			if ($res === null) {
				$fireTrace[] = array($position[1], $position[0] - $i);
			}
			else if ($res === "obst")
				break;
			else {
				$res->shield -= $player->ships[0]->weapons[0]->charge;
				break;
			}
		}
	}
	if ($player->ships[0]->rotation == 1) {
		for($i = 1; $i <= $range && $position[1] + $i <= 100; $i++) {
			$res = $gz->onPlace($position[1] + $i, $position[0]);
			if ($res === null) {
				$fireTrace[] = array($position[1] + $i, $position[0]);
			}
			else if ($res === "obst")
				break;
			else {
				$res->shield -= $player->ships[0]->weapons[0]->charge;
				break;
			}
		}
	}
	if ($player->ships[0]->rotation == 2) {
		for($i = 1; $i <= $range && $position[0] + $i <= 150; $i++) {
			$res = $gz->onPlace($position[1], $position[0] + $i);
			if ($res === null) {
				$fireTrace[] = array($position[1], $position[0] + $i);
			}
			else if ($res === "obst")
				break;
			else {
				$res->shield -= $player->ships[0]->weapons[0]->charge;
				break;
			}
		}
	}
	if ($player->ships[0]->rotation == 3) {
		for($i = 1; $i <= $range && $position[1] - $i >= 0; $i++) {
			$res = $gz->onPlace($position[1] - $i, $position[0]);
			if ($res === null) {
				$fireTrace[] = array($position[1] - $i, $position[0]);
			}
			else if ($res === "obst")
				break;
			else {
				$res->shield -= $player->ships[0]->weapons[0]->charge;
				break;
			}
		}
	}
	return $fireTrace;
}

if (isset($_POST["usr1"]) && $_POST["usr1"] == "move") { 
	$gz->players[0]->ships[0]->move();
}
if (isset($_POST["usr1"]) && $_POST["usr1"] == "turnLeft") {
	$gz->players[0]->ships[0]->turnLeft();
}
if (isset($_POST["usr1"]) && $_POST["usr1"] == "turnRight") {
	$gz->players[0]->ships[0]->turnRight();
}
if (isset($_POST["usr1"]) && $_POST["usr1"] == "finished") {
	$gz->players[0]->turnFinished = true;
}
if (isset($_POST["kill"]) && $_POST["kill"] == "kill") {
	$_SESSION['gz'] = "";
}


if (isset($_POST["usr2"]) && $_POST["usr2"] == "move") {
	$gz->players[1]->ships[0]->move();
}
if (isset($_POST["usr2"]) && $_POST["usr2"] == "turnLeft") {
	$gz->players[1]->ships[0]->turnLeft();
}
if (isset($_POST["usr2"]) && $_POST["usr2"] == "turnRight") {
	$gz->players[1]->ships[0]->turnRight();
}
if (isset($_POST["usr2"]) && $_POST["usr2"] == "finished") {
	$gz->players[1]->turnFinished = true;
}
if (isset($_POST["kill"]) && $_POST["kill"] == "kill") {
	$_SESSION['gz'] = "";
}

if (isset($_POST["usr1"]) && $_POST["usr1"] == "fireSh") {
	$_SESSION['fireTrace'] = fireTraceFinder( $gz, $gz->players[0], $gz->players[0]->ships[0]->position, $gz->players[0]->ships[0]->weapons[0]->short );
}
if (isset($_POST["usr1"]) && $_POST["usr1"] == "fireMid") {
	$_SESSION['fireTrace'] = fireTraceFinder( $gz, $gz->players[0], $gz->players[0]->ships[0]->position, $gz->players[0]->ships[0]->weapons[0]->middle );
}
if (isset($_POST["usr1"]) && $_POST["usr1"] == "fireLong") {
	$_SESSION['fireTrace'] = fireTraceFinder( $gz, $gz->players[0], $gz->players[0]->ships[0]->position, $gz->players[0]->ships[0]->weapons[0]->long );
}
if (isset($_POST["usr2"]) && $_POST["usr2"] == "fireSh") {
	$_SESSION['fireTrace'] = fireTraceFinder( $gz, $gz->players[1], $gz->players[1]->ships[0]->position, $gz->players[1]->ships[0]->weapons[0]->short );
}
if (isset($_POST["usr2"]) && $_POST["usr2"] == "fireMid") {
	$_SESSION['fireTrace'] = fireTraceFinder( $gz, $gz->players[1], $gz->players[1]->ships[0]->position, $gz->players[1]->ships[0]->weapons[0]->middle );
}
if (isset($_POST["usr2"]) && $_POST["usr2"] == "fireLong") {
	$_SESSION['fireTrace'] = fireTraceFinder( $gz, $gz->players[1], $gz->players[1]->ships[0]->position, $gz->players[1]->ships[0]->weapons[0]->long );
}

if (isset($_SESSION['traceFlag']) && $_SESSION['traceFlag'] == "put" ) {
	$_SESSION['fireTrace'] = "";
	$_SESSION['traceFlag'] = "not";
}

?>