<?php
	$folders = array(2011, 2012, 2013);
	$dir = "../img/";
	$echo = '';
	foreach($folders as $year)
	{
		$echo .= '<div id="y-'.$year.'"><div class="center">';
		$pics = scandir($dir.$year);
		$skip = 0;
		foreach($pics as $pic)
		{
			if($skip > 2)
			{
				$description = '';//'ARTIST NAME HERE';
				if($year == 2011)
				{
					$description = get_name($pic);
				}
				$style = 'height="113"';
				$echo .= '<a href="img/'.$year.'/'.$pic.'" rel="prettyPhoto[pp_'.$year.']" title="'.$description.'"><img class="gal-img" src="img/'.$year.'/'.$pic.'" '.$style.'/></a>';
			}
			$skip++;
		}
		$echo .= '</div></div>';
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