<?php

require_once "Player.class.php";
require_once "Weapon.class.php";
require_once "GameZone.class.php";
require_once "ShipInBattle.class.php";

session_start();

if (!isset($_SESSION['gz']) || $_SESSION['gz'] == "") {

	$gz = new GameZone();

	$laser = new Weapon(array( 'name'=>'laser' ));

	$ship1 = new ShipInBattle(array( 'position'=>array(5, 5), 'name'=>'Player1', 'weapon'=>$laser, 'sprite'=>'./img/plane_red_2.png', 'rotation'=>2 ));
	$ship2 = new ShipInBattle(array( 'position'=>array(50, 95), 'name'=>'Player2', 'weapon'=>$laser, 'sprite'=>'./img/plane_green_2.png', 'rotation'=>0 ));

	$plOne = new Player(array( 'name'=>'Player_1', 'ships'=>array( $ship1 ) ));
	$plTwo = new Player(array( 'name'=>'Player_2', 'ships'=>array( $ship2 ) ));

	$gz->setPlayers( array( $plOne, $plTwo ) );

	$_SESSION['gz'] = $gz;

} else {

	$gz = $_SESSION['gz'];

}

if (( $gz->players[0]->ships[0]->speed == 0 && $gz->players[0]->ships[0]->power == 0 &&
		$gz->players[1]->ships[0]->speed == 0 && $gz->players[1]->ships[0]->power == 0) ||
		($gz->players[0]->turnFinished && $gz->players[0]->turnFinished )) {
	$gz->refillEnergy();
}
if ( $gz->players[0]->ships[0]->shield <= 0 || $gz->players[1]->ships[0]->shield <= 0 ) {
	header('location: ./win.php');
}

?>