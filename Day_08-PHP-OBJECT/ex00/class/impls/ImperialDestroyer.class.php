<?PHP
	require_once 'MultipleLaser.class.php';

	class ImperialDestroyer extends SpaceShip {

		function __construct () {
			$this->_name = "Imperial Destroyer";
			$this->_sprite = "ImperialDestroyer.png";
			$this->_size = array(3, 1);
			$this->_power = 10;
			$this->_resistance = 4;
			$this->_weight = 4;
			$this->_speed = 18;
			$this->_weapons = array( new MultipleLaser() );
		}

		static function doc() {
			return file_get_contents("docs/SpaceShipImpl.doc.txt");
		}
	}
?>
