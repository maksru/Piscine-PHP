<?PHP
	require_once 'MultipleLaser.class.php';

	class ImperialFregate extends SpaceShip {

		function __construct () {
			$this->_name = "Imperial Fregate";
			$this->_size = array(4, 1);
			$this->_power = 10;
			$this->_resistance = 5;
			$this->_weight = 4;
			$this->_speed = 15;
			$this->_weapons = array( new MultipleLaser() );
		}

		static function doc() {
			return file_get_contents("docs/SpaceShipImpl.doc.txt");
		}
	}
?>
