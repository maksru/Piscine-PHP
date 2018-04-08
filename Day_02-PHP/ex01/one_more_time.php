#!/usr/bin/env php
<?php  
	function get_month($month)
	{
		if (ctype_upper($month)) {
			$month_ar = array(	"Janvier" => 1,
						   		"Fevrier" => 2,
						   		"Mars" => 3,
						   		"Avril" => 4,
						   		"Mai" => 5,
						   		"Juin" => 6,
						   		"Juillet" => 7,
						   		"Aout" => 8,
						  		"Septembre" => 9,
						   		"Octobre" => 10,
						   		"Novembre" => 11,
						   		"Decembre" => 12
						   	);
			return ($month_ar[$month]);
		}
		else
			$month_ar = array(	"janvier" => 1,
						   		"fevrier" => 2,
						   		"mars" => 3,
						   		"avril" => 4,
						   		"mai" => 5,
						   		"juin" => 6,
						   		"juillet" => 7,
						   		"aout" => 8,
						  		"septembre" => 9,
						   		"octobre" => 10,
						   		"novembre" => 11,
						   		"decembre" => 12
						   	);
		return ($month_ar[$month]);
	}
	if ($argc > 1)
	{
		if (preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-9]{2}) ([Jj]anvier|[Ff]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) ([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})/", $argv[1], $matches))
		{
			date_default_timezone_set("Europe/Paris");
			echo(mktime($matches[5], $matches[6], $matches[7],get_month($matches[3]), $matches[2], $matches[4]));
		}
		else
			echo("Введите коректную дату!");
		echo("\n");
	}
?>