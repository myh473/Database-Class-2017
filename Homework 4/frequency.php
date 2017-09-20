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