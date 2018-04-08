#!/usr/bin/env php
<?php  
	function ft_is_sort($argv)
	{
		if (count($argv) == 1)
			return (TRUE);
		$tmp = $argv;
		sort($tmp);
		for ($i = 0; $i < count($tmp); $i++)
		{
			if (strcmp($tmp[$i], $argv[$i]))
				return (FALSE);
		}
		return (TRUE);
	}
?>