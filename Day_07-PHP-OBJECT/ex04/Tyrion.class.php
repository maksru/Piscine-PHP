<?php
	  class Tyrion extends Lannister
	  {
	  	public function With($obj_clas)
		{
			if (get_parent_class($obj_clas) !== 'Lannister')
			{
				return ("Let's do this");
			}
			return ("Not even if I'm drunk !");
		}
	  }  
?>