<?PHP
	require_once '../Weapon.class.php';
	require_once '../SpaceShip.class.php';

	class OrkExplosor extends SpaceShip {

		function __construct () {
			$this->_name = "Ork Explosor";
			$this->_size_x = 5;
			$this->_size_y = 1;
			$this->_power = 10;
			$this->_resistance = 6;
			$this->_weight = 3;
			$this->_speed = 12;
			$this->_weapons = array( new MultipleLaser(), new HeavySpear() );
		}

		static function doc() {
			return file_get_contents("docs/SpaceShipImpl.doc.txt");
		}
	}
?>
