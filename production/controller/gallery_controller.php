<?php
	$folders = array(2011, 2012, 2013);
	$dir = "../img/";
	$echo = '';
	foreach($folders as $year)
	{
		$echo .= '<div id="y-'.$year.'">';
		$pics = scandir($dir.$year);
		$skip = 0;
		foreach($pics as $pic)
		{
			if($skip > 2)
			{
				$description = '';
				if($year != 2012)
				{
					$description = get_name($pic);
				}
				$echo .= '<a href="img/'.$year.'/'.$pic.'" rel="prettyPhoto[pp_gal]" title="'.$description.'"><img src="img/'.$year.'/'.$pic.'" width="150" height="112.5"/></a>';
			}
			$skip++;
		}
		$echo .= '</div>';
	}

	echo "$echo";

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
		$name = ucwords(strtolower($name));
		return $name;
	}
?>