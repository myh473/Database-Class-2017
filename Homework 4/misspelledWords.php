<html>
<head>
	<title>Word Game</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>Here are your random letter pal</h1>

	<?php 

	$randomWords = array();
	$numWords = 1000;
	$randomLetters = '';

	for($i = 0; $i < $numWords; $i++) {

		$letterCount = rand(3,7);

		for($j = 0; $j < $letterCount; $j++) {
			$randomLetters .= chr(rand(97,122));
			}
			$randomWords[$i] = $randomLetters;
			$randomLetters = '';
	}


			print("<pre>Nice 'words' ");
			print_r($randomWords);
			print("</pre>");


	for($j = 0; $j < sizeof($lines); $j++) { //taken from HW 3
					if(isset($permutations[$lines[$j]])) {
						$words[] = $lines[$j];
						fwrite($wordsFile, $lines[$j]);
						fwrite($wordsFile, "\n");
					}
			}


	?>

	</body>
	</html>