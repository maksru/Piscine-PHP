<?php

require_once "Spaceship.class.php";

class ShipInBattle extends Spaceship {

	public $position;
	public $rotation;

	public function __construct($arr) {
		$this->position = $arr["position"];
		$this->name = $arr["name"];
		$this->weapons[] = $arr["weapon"];
		if (isset($arr["rotation"]))
			$this->rotation = $arr["rotation"];
		if (isset($arr["sprite"]))
			$this->sprite = $arr["sprite"];
	}

	public function __destruct() {
		return "nothing here, sorry" . PHP_EOL;
	}

	public function __toString() {
		
	}

	public static function doc() {
		$doc_string = file_get_contents("ShipInBattle.doc.txt") . PHP_EOL;
		return $doc_string;
	}

	public function move() {
		if ($this->speed <= 0)
			return;
		if ($this->rotation == 0 && $this->position[0] > 2)
			$this->position[0]--;
		if ($this->rotation == 1 && $this->position[1] < 99)
			$this->position[1]++;
		if ($this->rotation == 2 && $this->position[0] < 149)
			$this->position[0]++;
		if ($this->rotation == 3 && $this->position[1] > 2)
			$this->position[1]--;
		$this->speed--;
		
	}
	public function turnLeft() {
		if ($this->power <= 0)
			return;
		$this->rotation--;
		if ($this->rotation > 3)
			$this->rotation -= 4;
		if ($this->rotation < 0)
			$this->rotation += 4;
		$this->power--;
		
	}
	public function turnRight() {
		if ($this->power <= 0)
			return;
		$this->rotation++;
		if ($this->rotation > 3)
			$this->rotation -= 4;
		if ($this->rotation < 0)
			$this->rotation += 4;
		$this->power--;

	}
	public function fire() {
		return $this->weapons[0]->fire();
	}

}
?>