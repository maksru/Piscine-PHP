<?php
	 abstract class House
	 {
	 	abstract function getHouseName();
	 	abstract function getHouseMotto();
	 	abstract function getHouseSeat();

	 	function introduce()
	 	{
	 		print("House ");
	 		print($this->getHouseName());
	 		print(" of ");
	 		print($this->getHouseSeat());
	 		print(" : ");
	 		print('"' . $this->getHouseMotto() . '"'  . "\n");
	 	}
	 } 
?>