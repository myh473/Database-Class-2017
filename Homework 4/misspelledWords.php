<html>
<head>
	<title>Misspelled Words</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>Oh wow look at all these random words! I hope they are here, because I can't see them that's for sure, because of the ants. I'm ants in my eyes Johnson!</h1>

	<?php 

	$realWords = fopen("RealWords.txt", "w");
	$fakeWords = fopen("FakeWords.txt", "w");
	$lines = file("engmix.txt", FILE_IGNORE_NEW_LINES);
	$randomWords = array();
	$numWords = 1000;
	$randomLetters = '';

	for($i = 0; $i < $numWords; $i++) {

		$letterCount = rand(3,7);

		for($j = 0; $j < $letterCount; $j++) {
			$randomLetters .= chr(rand(97,122));
		}
		$randomWords[$randomLetters] = $randomLetters;
		$randomLetters = '';
	}

			print("<pre>Nice 'words' ");
			print_r($randomWords);
			print("</pre>");

	for($j = 0; $j < sizeof($lines); $j++) {
					if(isset($randomWords[$lines[$j]])) {
						$wordsGood[] = $lines[$j];
						fwrite($realWords, $lines[$j]);
						fwrite($realWords, "\n");
					}
				}

			print("<pre>Here is your words ");
			print_r($wordsGood);
			print("</pre>");

					foreach($randomWords as $value) {
						$count = 0;
						for($i = 0; $i < sizeof($wordsGood); $i++) {
							if($randomWords[$value] == $wordsGood[$i]) {
								$count = 1;
							}//if
						}//for
						if($count == 0) {
						$wordsBad[] = $randomWords[$value];
						}
					}//foreach

			print("<pre>Here are things that are not words");
			print_r($wordsBad);
			print("</pre>");

			sort($wordsBad);

			for($i = 0; $i < sizeof($wordsBad); $i++) {
			fwrite($fakeWords, $wordsBad[$i]);
			fwrite($fakeWords, "\n");
			}

			print("<pre>Here are things that are not words -Sorted");
			print_r($wordsBad);
			print("</pre>");

			fclose($realWords);
			fclose($fakeWords);
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