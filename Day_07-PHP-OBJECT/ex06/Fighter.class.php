<?php  
	abstract class Fighter
	{
		abstract function fight($i);
		public $type_soldier;
		public function __construct($type_sol)
		{
			$this->type_varior = $type_sol;
		}
		public function getType()
		{
			return ($this->type_varior);
		}
	}

?>