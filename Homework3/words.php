<html>
<head>
	<title>Word Game</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>The words file</h1>

	<?php 
		session_start();
	//	$engmix = fopen("engmix.txt", "r");
		$substrings = fopen("substrings.txt", "r");
		//$permutations = fopen("permutations.txt", "r");
		$lines = file("engmix.txt", FILE_IGNORE_NEW_LINES);
		$permutations = file("permutations.txt", FILE_IGNORE_NEW_LINES);
		for($i = 0; $i<sizeof($permutations); $i++) {
			$permutationsSorted[$permutations[$i]] = $permutations[$i];
		}
//USE FOR EACH LOOPS

		//$permutationsSorted = array_unique($permutations);
		
		print("<pre>");
		print_r($permutations);
		print("</pre>");
		print("<pre>");
		print_r($permutationsSorted);
		print("</pre>");



		for($i = 0; $i < sizeof($permutationsSorted); $i++) {

			for($j = 0; $j < sizeof($lines); $j++) {

				if($permutationsSorted[$i] == $lines[$j]) {
					//array_push($words, $permutations[$i]);
					$words[] = $permutationsSorted[$i];
				}
			}
		}
		
		print("</pre>");
		print_r($words);
		print("</pre>");

		//print ("<tr> <td> $count </td> </tr>");
		//print ("<tr> <td> $count2 </td> </tr>");
	//	fclose($engmix);
		fclose($substrings);
		//fclose($permutations);
	$_SESSION["letters"]
	?>
	</body>
	</html>