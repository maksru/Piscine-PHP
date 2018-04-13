<?PHP
	class HeavySpear extends Weapon {

		function __construct () {
			$this->_charge = 3;
			$this->_distance = array (30, 60, 90);
			$this->_effect = Weapon::LINE;
			$this->_rayon = 1;
		}

		static function doc() {
			return file_get_contents("docs/WeaponImpl.doc.txt");
		}
	}
?>
