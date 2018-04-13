<?php

abstract class SpaceShip {

	const ENABLED_ORDER = 0;
	const ENABLED_MOVE = 1;
	const ENABLED_SHOOT = 2;
	const DISABLED = 3;
	const DEAD = 4;
	const NONE = 5;

    protected $_name = "Default Ship";
    protected $_sprite = null;
    protected $_size = array (1,1);
    protected $_resistance = 0;
    protected $_power = 0;
    protected $_speed = 0;
    protected $_weight = 0;
	protected $_shield = 0;
	protected $_state = SpaceShip::NONE;
    protected $_weapons = array();
	protected $_bonus = array();
	protected $_position = array(0,0);

	function __get($attrb) {
		return "";
	}

	function __set($attrb, $value) {
		return ;
	}

	static function doc() {
		return file_get_contents("impls/docs/SpaceShip.doc.txt");
	}

    public function getName() {          return $this->_name;      }

    public function setName($_name) {          $this->_name = $_name;      }

    public function getSprite() {          return $this->_sprite;      }

    public function setSprite($_sprite) {          $this->_sprite = $_sprite;      }

    public function getSize() {          return $this->_size;      }

    public function setSize($_size) {          $this->_size = $_size;      }

    public function getResistance() {          return $this->_resistance;      }

    public function setResistance($_resistance) {          $this->_resistance = $_resistance;      }

    public function getPower() {          return $this->_power;      }

    public function setPower($_power) {          $this->_power = $_power;      }

    public function getSpeed() {          return $this->_speed;      }

    public function setSpeed($_speed) {          $this->_speed = $_speed;      }

    public function getWeight() {          return $this->_weight;      }

    public function setWeight($_weight) {          $this->_weight = $_weight;      }

    public function getShield() {          return $this->_shield;      }

    public function setShield($_shield) {          $this->_shield = $_shield;      }

    public function getState() {          return $this->_state;      }

    public function setState($_state) {          $this->_state = $_state;      }

    public function getWeapons() {          return $this->_weapons;      }

    public function setWeapons($_weapons) {          $this->_weapons = $_weapons;      }

    public function getBonus() {          return $this->_bonus;      }

    public function setBonus($_bonus) {          $this->_bonus = $_bonus;      }

    public function getPosition() {          return $this->_position;      }

    public function setPosition($_position) {          $this->_position = $_position;      }
}
?>
