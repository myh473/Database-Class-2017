<?php 
		
		$wordsFile = fopen("words.txt", "w");
		$lines = file("engmix.txt", FILE_IGNORE_NEW_LINES);
		$input = $_SESSION['input'];
		
			for($j = 0; $j < sizeof($lines); $j++) {
					if(isset($input[$lines[$j]])) {
						$words[] = $lines[$j];
						fwrite($wordsFile, $lines[$j]);
						fwrite($wordsFile, "\n");
					}
			}

		if(empty($words)) {
			print("There are no valid words in this set of letters.");
		}
		
		else {
		print("<pre>All Real Words from Permutations<br>");
		print_r($words);
		print("</pre>");
		
		 $_SESSION['words']=$words;
		}

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