<?php

class Player {

	public $name;
	public $ships = array();
	public $turnFinished = false;

	public function __construct( array $arr ) {
		$this->name = $arr['name'];
		foreach ($arr['ships'] as $ship) {
			$this->fillFleet($ship);
		}
	}

	public function __destruct() {

	}

	public function __toString() {
		return 'Player ("name"=' . $this->name . '; "ships"=array(' . count($this->ships) .
		'); "turnFinished"=' . $this->turnFinished . ';)' . PHP_EOL;
	}

	public static function doc() {
		$doc_string = file_get_contents("Player.doc.txt") . PHP_EOL;
		return $doc_string;
	}

	public function fillFleet( $ship ) {
		$this->ships[] = $ship;
	}
	public function getFullHealth() {
		$health = 0;
		foreach ($this->ships as $ship) {
			$health += $ship->shield;
		}
		return $health;
	}
	
}
?>