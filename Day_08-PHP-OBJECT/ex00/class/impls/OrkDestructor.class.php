<?PHP
	class OrkDestructor extends SpaceShip {

		function __construct () {
			$this->_name = "Ork Destructor";
			$this->_sprite = "OrkDestructor.png";
			$this->_size = array(2, 1);
			$this->_power = 10;
			$this->_resistance = 4;
			$this->_weight = 3;
			$this->_speed = 19;
			$this->_weapons = array( new MultipleLaser() );
		}

		static function doc() {
			return file_get_contents("docs/SpaceShipImpl.doc.txt");
		}
	}
?>
