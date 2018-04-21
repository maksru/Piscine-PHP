<?php

class Spaceship {

	public $name;
	public $size = array(1, 1);
	public $sprite;
	public $power = 10;
	private $powerIni = 10;
	public $speed = 10;
	private $speedIni = 10;
	public $shield = 15;
	public $weapons = array();

	public function __construct( $arr ) {
		$this->name = $arr["name"];
		$this->weapons[] = $arr["weapon"];
		$this->sprite = $arr["sprite"];

		$this->speedIni = $this->speed;
		$this->powerIni = $this->power;
	}

	public function __destruct() {

	}

	public function __toString() {
		return "..." . PHP_EOL;
	}

	public static function doc() {
		$doc_string = file_get_contents("Spaceship.doc.txt") . PHP_EOL;
		return $doc_string;
	}

	public function refillEnergy() {
		$this->power = $this->powerIni;
		$this->speed = $this->speedIni;
		echo "hello";
	}

}
?>