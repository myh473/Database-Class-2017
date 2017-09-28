<html>
<head>
	<title>This all sounds sorta like something else</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>Oh wow look at all these random words! I hope they are here, because I can't see them that's for sure, because of the ants. I'm ants in my eyes Johnson!</h1>

	<?php 
	set_time_limit(120); //There arrays are huge!
	print("Script Timeout has been set higher than normal for this script to run. Please be patient.<br><br>");
	$homophones = fopen("homophones.txt", "w");
	$fakeWords = file("fakeWords.txt", FILE_IGNORE_NEW_LINES);
	$words = file("engmix.txt", FILE_IGNORE_NEW_LINES);
	$soundexArray = array();
	$metaphoneArray = array();
	for($j = 0; $j < sizeof($words); $j++) {
			$soundexArray[] = soundex($words[$j]);
			$metaphoneArray[] = metaphone($words[$j]);
	}
	
	for($j = 0; $j < sizeof($fakeWords); $j++) {
			$fakeSoundexArray[] = soundex($fakeWords[$j]);
			$fakeMetaphoneArray[] = metaphone($fakeWords[$j]);
	}
	for($i = 0; $i < sizeof($fakeWords); $i++) {
		for($j = 0; $j < sizeof($words); $j++) {
			if($soundexArray[$j] == $fakeSoundexArray[$i]) {
				$finalSoundexArray[$fakeWords[$i]][] = $words[$j];
			}
			if($metaphoneArray[$j] == $fakeMetaphoneArray[$i]) {
				$finalMetaphoneArray[$fakeWords[$i]][] = $words[$j];
			}
		}
	}
			/*
			print("<pre>Soundex ");
			print_r($finalSoundexArray);
			print("</pre>");
			print("<pre>Metaphone ");
			print_r($finalMetaphoneArray);
			print("</pre>");
			*/
			for($i = 0; $i < sizeof($fakeWords); $i++) {
				if(array_key_exists($fakeWords[$i], $finalSoundexArray)) {
					$writeString = ("Soundex of $fakeWords[$i] : " . sizeof($finalSoundexArray[$fakeWords[$i]])) . " ";
					for($j = 0; $j < sizeof($finalSoundexArray[$fakeWords[$i]]); $j++) {
						$writeString .= " : " . $finalSoundexArray[$fakeWords[$i]][$j];
					}
					$writeString .= "\n";
					fwrite($homophones, $writeString);
				//	print("Soundex = $writeString<br>");
				}
				if(array_key_exists($fakeWords[$i], $finalMetaphoneArray)) {
					$writeString = ("Metaphone of $fakeWords[$i] : " . sizeof($finalMetaphoneArray[$fakeWords[$i]])) . " ";
					for($j = 0; $j < sizeof($finalMetaphoneArray[$fakeWords[$i]]); $j++) {
						$writeString .= " : " . $finalMetaphoneArray[$fakeWords[$i]][$j];
					}
					$writeString .= "\n";
					fwrite($homophones, $writeString);
				//	print("Metaphone = $writeString<br>");
				}
			}
	fclose($homophones);
	?>
	
	<form action = "misspelledWords.php" method = "post" >
	<input type = "submit" value = "Let's misspell some words">
	</form>
	<form action = "frequency.php" method = "post" >
	<input type = "submit" value = "Frequency">
	</form>	
	<form action = "homophones.php" method = "post" >
	<input type = "submit" value = "Homophones">
	</form>	
	<form action = "levenshtein.php" method = "post" >
	<input type = "submit" value = "Levenshtein">
	</form>	
     <form action = "start.html" method = "post" >
    <input type = "submit" value = "Back to the start">
    </form>
</body>
</html>