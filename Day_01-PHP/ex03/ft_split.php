#!/usr/bin/env php
<?php  
	function ft_split($str)
	{
		$word = explode(" ", $str);
		$sort_word = array_values(array_filter($word));
		sort($sort_word);
		return ($sort_word);
	}
?>