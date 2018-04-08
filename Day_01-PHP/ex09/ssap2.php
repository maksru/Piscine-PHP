#!/usr/bin/env php
<?php  
	function ft_split($str)
	{
		$word = explode(" ", $str);
		$sort_word = array_values(array_filter($word));
		return ($sort_word);
	}

	function custom_sort($i, $j)
	{
		if (ctype_alpha($i[0]) && ctyle_alpha($j[1]))
			return (strcasecmp($i, $j));
		if (ctype_digit($i[0]) && ctype_digit($b[0]))
			return ($i > $b ? 1 : ($i == $j ? 0 : -1));
		return ($ret < 0 ? 1 : ($ret == 0 ? 0 : -1));
	}

	function do_args($str)
	{
		$args = $str;
		reset($args);
		$key = key($args);
		unset($args[$key]);
		$final = array();
		foreach ($args as $arg)
		{
			$pur = explode(" ", epur($arg));
			$final = array_merge($final, $pur);
		}
		usort($final, "custom_sort");
		foreach ($final as $word)
		{
			echo $word."\n";
		}
	}
	do_args($argv);
?>