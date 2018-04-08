#!/usr/bin/env php
<?php
	if ($argc != 2)
		exit();
	$str_word = preg_replace("/\s+/", " ", $argv[1]);
	$str = trim($str_word);
	echo ("$str\n");
?>