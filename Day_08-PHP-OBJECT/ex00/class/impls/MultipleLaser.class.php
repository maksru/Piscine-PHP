<?PHP

	class MultipleLaser extends Weapon {

		function __construct () {
			$this->_charge = 0;
			$this->_distance = array (10, 20, 30);
			$this->_effect = Weapon::CONE;
			$this->_rayon = 3;
		}

		static function doc() {
			return file_get_contents("docs/WeaponImpl.doc.txt");
		}
	}
?>
