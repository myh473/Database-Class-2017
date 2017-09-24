<html>
<head>
	<title>FFFFFFFFFREQUENCY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>Oh wow look at all these random words! I hope they are here, because I can't see them that's for sure, because of the ants. I'm ants in my eyes Johnson!</h1>

<?php 
		
		$wordsFile = fopen("letter_frequency.txt", "w");
		$words = file("engmix.txt", FILE_IGNORE_NEW_LINES);
		$hugeWord = implode($words);
		$total = 0;

		$sum = 0;




		for($i = 0; $i < 26; $i++) {

			$hold = chr($i + 97);
			print("$hold<br>");
			$letterHold[$hold] = substr_count($hugeWord, $hold);
			print("letter hold is $letterHold[$hold]<br>");
			$sum += $letterHold[$hold];
		}

			print("<pre>Letter Frequency ");
			print_r($letterHold);
			print("</pre>");

			foreach($letterHold as $key => $value) {
				$percentage[$key] = round($letterHold[$key] / ($sum / 100), 2); //there is a rounding error but otherwise works as intended.
				$total += $percentage[$key];
				$insert =("$key : $letterHold[$key] : $percentage[$key] \n");
				fwrite($wordsFile, $insert);

			}

			print("<pre>Letter Frequency $total ");
			print_r($percentage);
			print("</pre>");




	fclose($wordsFile);
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