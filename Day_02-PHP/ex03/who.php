#!/usr/bin/env php
<?php
	$file = fopen("/var/run/utmpx", "rb");
	fseek($file, 1256);
	date_default_timezone_set("Africa/Johannesburg");
	while (!feof($file))
	{
		$data = fread($file, 628);
		if (strlen($data) == 628)
		{
			$data = unpack("a256user/a4id/a32line/ipid/itype/itime", $data);
			if ($data['type'] == 7)
			{
				echo trim($data['user']) . " ";
				echo trim($data['line']) . "  ";
				$time = date("M d H:i", $data['time']);
				echo $time . " \n";
			}
		}
	}
?>