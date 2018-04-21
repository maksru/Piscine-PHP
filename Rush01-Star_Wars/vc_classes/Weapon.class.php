<?php

class Weapon {

	public $name;
	public $charge = 5;
	public $short = 5;
	public $middle = 10;
	public $long = 15;
	public $special = false;

	public function __construct( $args ) {
		$this->name = $args["name"];
	}

	public function __destruct() {

	}

	public function __toString() {
		return "Weapon: ('name'=".$this->name."; 'charge'=".$this->charge."; 'short'=".$this->short.
				"; 'middle'=".$this->middle."; 'long'=".$this->long."; 'special'=".$this->special.PHP_EOL;
	}

	public static function doc() {
		$doc_string = file_get_contents("Weapon.doc.txt") . PHP_EOL;
		return $doc_string;
	}

	public function fire() {
		return "piu-piu";
	}
	public function shortRange() {
		return $this->short;
	}
	public function midRange() {
		return $this->middle;
	}
	public function longRange() {
		return $this->long;
	}

}
?>