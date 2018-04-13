<?PHP
class Player {

	protected $_ships = array ();
	protected $_color = "red";

	public function addShip($ship) {
		array_push($this->_ships, $ship);
	}

	public function getShips() {
		return $this->_ships;
	}

	public function getColor() {
		return $this->_color;
	}

	public function setColor($color) {
		return $this->_color = $color;
	}

	static function doc() {
		return file_get_contents("impls/docs/Player.doc.txt");
	}

}
?>
