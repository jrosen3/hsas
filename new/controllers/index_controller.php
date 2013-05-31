<?php
	$array;
	$dir = "../img";
	$years = scandir($dir);
	$years = array_slice($years, 3);
	foreach($years as $year)
	{
		if(is_numeric($year))
		{
			$temp_dir = $dir . "/" . $year;
			$imgs = scandir($temp_dir);
			$imgs = array_slice($imgs, 2);
			foreach($imgs as $img)
			{
				$name = get_name($img);
				$array .= "<img src=img" . "/" . $year . "/" . $img . ' alt="' . $name . '"width="100%"/>';
			}
		}
	}
	echo "$array";

	// parses a file (images) name a and retruns the artists name
	function get_name($file)
	{
		$name;
		$counter = 0;
		for($i = 0; $i < strlen($file); $i++)
		{
			if((ctype_alpha($file[$i])) || ($file[$i] == " "))
			{
				$name[$i] = $file[$i];
			}
			else
			{
				if($counter > 0)
				{
					break;
				}
				$name[$i] = " ";
				$counter++;
			}
		}
		$name = implode("", $name);
		return $name;
	}
?>