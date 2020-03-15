<?php
	$arr = [
		['f', 'g', 'h', 'i'],
		['j', 'k', 'p', 'q'],
		['r', 's', 't', 'u']
	];

	function cari($arrays, $text)
	{
		$text		= strtolower($text);
		$textCount	= strlen($text);

		$status_temp = [];
		foreach ($arrays as $array) {
			for ($i=0; $i<$textCount; $i++) { 
				if (in_array($text[$i], $array)) {
					$status_temp[] = true;
				} else {
					$status_temp[] = false;
				}
			}
		}

		print_r(in_array(true, $status_temp) ? "true" : "false" );
	}

	cari($arr, 'fghi'); 	// true
	cari($arr, 'fghp');		// true
	cari($arr, 'fjrstp');	// true
?>