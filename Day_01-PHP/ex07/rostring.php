#!/usr/bin/env php
<?php
	if ($argc > 1)
	{
		for ($i = 0; $i < $argc; $i++)
		{
			$str = trim(preg_replace("/\s+/", " ", $argv[1]));
			$word_dell_space = explode(" ", $str);
		}
		for ($i = 1; $i < count($word_dell_space); $i++)
			echo ($word_dell_space[$i]." ");
		echo ($word_dell_space[0]."\n");
	}
?>