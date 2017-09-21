<html>
<head>
	<title>Word Game</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>Here are your random letter pal</h1>

	<?php 

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


	for($j = 0; $j < sizeof($lines); $j++) { //taken from HW 3
					if(isset($randomWords[$lines[$j]])) {
						$wordsGood[] = $lines[$j];

						//print("aw nutts");
						//fwrite($wordsFile, $lines[$j]);
						//fwrite($wordsFile, "\n");
					}
				}

			print("<pre>Here is your words ");
			print_r($wordsGood);
			print("</pre>");

					foreach($randomWords as $value) {
						for($i = 0; $i < sizeof($wordsGood); $i++) {
						//	print("$i is i $value is value<br>");
							if($randomWords[$value] == $wordsGood[$i]) {
								print("nutts<br>");	
								break;
							}
							else {
								$wordsBad[] = $randomWords[$value];
								
							}
						}
					}




			print("<pre>Here are things that are not words");
			print_r($wordsBad);
			print("</pre>");


	?>

	</body>
	</html>