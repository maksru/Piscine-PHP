<?PHP
 abstract class Weapon {

	const NONE = 0;

	const SQUARE = 10;
	const CIRCLE = 11;
	const CONE = 12;
	const LINE = 13;

	protected $_charge = 0;
	protected $_distance = array(0, 0, 0);
	protected $_effect = Weapon::NONE;
	protected $_rayon = 0;


	function __get($attrb) {
		return "";
	}

	function __set($attrb, $value) {
		return ;
	}

	static function doc() {
		return file_get_contents("impls/docs/Weapon.doc.txt");
	}

    public function getCharge() {          return $this->_charge;      }

    public function setCharge($_charge) {          $this->_charge = $_charge;      }

    public function getDistance() {          return $this->_distance;      }

    public function getEffect() {          return $this->_effect;      }

    public function getRayon() {          return $this->_rayon;      }
}
?>
