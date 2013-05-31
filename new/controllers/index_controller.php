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
				$rel = $dir . "/" . $year . "/" . $img;
				$horv = (getimagesize($rel));
				if($horv[0] > $horv[1])
				{
					//$array .= "<img src=img" . "/" . $year . "/" . $img . ' alt="' . $name . '" class="ssi" />';
					$array .= "<figure><img src=img" . "/" . $year . "/" . $img . ' alt="' . $name . '"/><figcaption>' . $name . "</figcaption></figure>";
				}
			}
		}
	}
	echo "$array";

	// parses a file (images) name a and retruns the artists name
	function get_name($file)
	{
		$name;
		$counter = 0;
		$n = strlen($file);
		for($i = 0; $i < $n; $i++)
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