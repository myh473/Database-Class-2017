<html>
<head>
	<title>Word Game</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>The words file</h1>

	<?php 
		session_start();
		//$engmix = fopen("engmix.txt", "r");
		//$substrings = fopen("substrings.txt", "r");
		//$permutations = fopen("permutations.txt", "r");
		$lines = file("engmix.txt", FILE_IGNORE_NEW_LINES);
		//$permutations = file("permutations.txt", FILE_IGNORE_NEW_LINES);
		$permutations = $_SESSION['Permutations'];
		for($i = 0; $i<sizeof($permutations); $i++) {
			$permutationsSorted[$permutations[$i]] = $permutations[$i];
		}
//USE FOR EACH LOOPS

		//$permutationsSorted = array_unique($permutations);
		
		//print("<pre>Unsorted Permutations <br>");
		//print_r($permutations);
		//print("</pre>");
		print("<pre>Sorted Permutations<br>");
		print_r($permutationsSorted);
		print("</pre>");

			for($j = 0; $j < sizeof($lines); $j++) {

				if(isset($permutationsSorted[$lines[$j]])) {
					$words[] = $lines[$j];
				}
			}
		
		print("<pre>All Real Words from Permutations<br>");
		print_r($words);
		print("</pre>");
		
		 $_SESSION['words']=$words;

		//fclose($substrings);
		//fclose($permutations);
	$_SESSION["letters"]
	?>
	
	
	

	<form action = "wordGame.php" method = "post" >
	<input type = "submit" value = "Back">
	</form>
	<form action = "logout.php" method = "post" >
	<input type = "submit" value = "Start Over">
	</body>

	</body>
	</html>