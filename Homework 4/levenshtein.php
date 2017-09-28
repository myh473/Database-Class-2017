<html>
<head>
	<title>The German File</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>Oh wow look at all these random words! I hope they are here, because I can't see them that's for sure, because of the ants. I'm ants in my eyes Johnson!</h1>

	<?php 
	$fakeWords = file("fakeWords.txt", FILE_IGNORE_NEW_LINES);
	$levenshteinSort = fopen("levenshteinSort.txt", "w");
	$words = file("engmix.txt", FILE_IGNORE_NEW_LINES);
	$holdArray = array();
	$compHold = array();
	set_time_limit(120); //There arrays are huge!
	print("Script Timeout has been set higher than normal for this script to run. Please be patient.<br><br>");
		for($i = 0; $i < sizeof($fakeWords);$i++) {
			$sortedArray[$fakeWords[$i]] = $fakeWords[$i];
		
		}

		foreach($sortedArray as $key => $value) {
			$hold = array();
			$compHold = 999;
			for($i = 0; $i < sizeof($words); $i++) {
				$compair = levenshtein($sortedArray[$key], $words[$i]);
					if($compHold > $compair) {
						$compHold = $compair;
						$hold = $words[$i];
						print("bad word is $sortedArray[$key] good word is $hold comp = $compair<br>");
					}
			}
			$holdArray[$key] = $hold;
			$compArray[$key] = $compHold;
		}



		print("<pre>Here is the closest levenshtein word to each 'word' <br>");
		print_r($holdArray);
		print("</pre>");

		print("<pre>Here is the levenshtein value of each 'word' <br>");
		print_r($compArray);
		print("</pre>");
		print("<br>Script finished");

		foreach($sortedArray as $key) {
			$tranString = ("$sortedArray[$key] : $holdArray[$key] : $compArray[$key] \n");
			fwrite($levenshteinSort, $tranString);
		}

	fclose($levenshteinSort);
	?>
	<form action = "start.html" method = "post" >
    <input type = "submit" value = "Back to the start">
    </form>
	<form action = "analysis.php" method = "post" >
	<input type = "submit" value = "Analysis">
	</form>
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
	<form action = "logout.php" method = "post" >
	<input type = "submit" value = "Start Over">
</body>
</html>