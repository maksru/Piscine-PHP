<?PHP
	session_start();
	require_once '../class/Game.class.php';
	header("Content-Type: application/json");
	
	if (isset($_SESSION['party_id'])) 
	{
		$party = Game::load($_SESSION['party_id']);
		$ships = array();
		foreach ($party->getPlayers() as $player) 
		{
			foreach ($player->getShips() as $ship) 
			{
				$new_arr = array();
				$new_arr['owner'] = $player->getColor();
				$new_arr['size'] = $ship->getSize();
				$new_arr['position'] = $ship->getPosition();
				$new_arr['name'] = $ship->getName();
				$new_arr['sprite'] = "styles/img/sprites/" . $ship->getSprite();
				array_push($ships, $new_arr);
			}
		}
		echo json_encode($ships);
		header("HTTP/1.0 200 OK");
	}
	else {
		header("HTTP/1.0 401 Unauthorized");
	}
?>
