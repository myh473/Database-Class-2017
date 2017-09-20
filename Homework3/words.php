<html>
<head>
	<title>Word Game</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>The words file</h1>

	<?php 
		session_start();
		$wordsFile = fopen("words.txt", "w");
		$lines = file("engmix.txt", FILE_IGNORE_NEW_LINES);
		$permutations = $_SESSION['Permutations'];
		
			for($j = 0; $j < sizeof($lines); $j++) {
					if(isset($permutations[$lines[$j]])) {
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

	<form action = "wordGame.php" method = "post" >
	<input type = "submit" value = "Back">
	</form>
	<form action = "logout.php" method = "post" >
	<input type = "submit" value = "Start Over">
	</body>

	</body>
	</html>