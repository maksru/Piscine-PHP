<?PHP
	require_once 'Player.class.php';
	require_once 'SpaceShip.class.php';
	require_once 'Weapon.class.php';
	require_once 'impls/ImperialFregate.class.php';
	require_once 'impls/OrkDestructor.class.php';
	class Game {

		protected $_id = 0;
		protected $_players = array();

		function __construct () {
			$this->_id = Game::gen_uuid();
			$one = new Player();
			$one->setColor("blue");
			$one->addShip(new ImperialFregate());
			$one->getShips()[0]->setPosition(array( 40, 30 ));
			$two = new Player();
			$two->setColor("red");
			$two->addShip(new OrkDestructor());
			$two->getShips()[0]->setPosition(array( 80, 70 ));
			$this->_players = array ($one, $two);
		}


		public function save() {
			file_put_contents($_SERVER['DOCUMENT_ROOT'] ."/datas/parties/" . $this->_id, serialize($this));
		}

  		public static function gen_uuid() {
    		return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      			mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff),
      			mt_rand(0, 0x0fff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000,
      			mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff));
		}


    public function getId() {          return $this->_id;      }

    public function setId($_id) {          $this->_id = $_id;      }

    public function getPlayers() {          return $this->_players;      }

    public function setPlayers($_players) {          $this->_players = $_players;      }

		static function load($id) {
				if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/datas/parties/". $id) == false)
					return null;
				$content = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/datas/parties/" . $id));
				$instance = new Game();
				$instance->setPlayers($content->getPlayers());
				$instance->setId($id);
				return $instance;
			}

			static function doc() {
				return file_get_contents("impls/docs/Game.doc.txt");
			}
	}
?>
