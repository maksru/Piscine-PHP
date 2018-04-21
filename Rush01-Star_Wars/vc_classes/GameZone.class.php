<?php

class GameZone {

	public $obstacles = array();
	public $players = array();

	public function __construct() {

	}

	public function __destruct() {

	}

	public function __toString() {
		return "nothing here.." . PHP_EOL;
	}

	public function setPlayers( $arr ) {
		foreach ($arr as $player) {
			$this->players[] = $player;
		}
	}

	public static function doc() {
		$doc_string = file_get_contents("GameZone.doc.txt") . PHP_EOL;
		return $doc_string;
	}

	public function refillEnergy() {
		foreach ($this->players as $player) {
			$player->turnFinished = false;
			foreach ($player->ships as $ship) {
				$ship->refillEnergy();
			}
		}
	}

	public function onPlace( $x, $y ) {
		if (isset($this->obstacle)) {
			foreach ($this->obstacle as $obst) {
				if ( $x == $obst->position[1] && $y == $obst->position[0] )
					return "obst";
			}
		}
		foreach ($this->players as $player) {
			foreach ($player->ships as $ship) {
				if ( $x == $ship->position[1] && $y == $ship->position[0] )
					return $ship;
			}
		}
	}

}
?>