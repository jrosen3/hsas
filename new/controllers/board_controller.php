<?php
	$array;
	$echo;
	$path = "../img/misc/board/";
	$file = $path . "/execute.csv";
	$fp = fopen("$file", "r");

	/*$pics = scandir($path);
	$pics = array_slice($pics, 3);*/

	while($row = fgets($fp))
	{
		$csv = str_getcsv($row);
		$array[$csv[0]] = $csv;
		$echo .= 
	}
	print_r($array);
	print_r($pics);
?>