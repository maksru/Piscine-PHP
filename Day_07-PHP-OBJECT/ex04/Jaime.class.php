<?php
	  class Jaime extends Lannister
	  {
	  	public function With($obj_clas)
	  	{
	  		if (get_parent_class($obj_clas) !== "Lannister")
	  		{
	  			return("Let's do this");
	  		}
	  		elseif (get_class($obj_clas) === "Cersei") 
	  		{
	  			return("With pleasure, but only in a tower in Winterfell, then.");
	  		}
	  		else
			{
				return ("Not even if I'm drunk !");
			}
	  	}
	  }
?>