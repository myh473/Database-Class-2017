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
		$letter_A = substr_count($hugeWord, 'a');
		$letter_B = substr_count($hugeWord, 'b');
		$letter_C = substr_count($hugeWord, 'c');
		$letter_D = substr_count($hugeWord, 'd');
		$letter_E = substr_count($hugeWord, 'e');
		$letter_F = substr_count($hugeWord, 'f');
		$letter_G = substr_count($hugeWord, 'g');
		$letter_H = substr_count($hugeWord, 'h');
		$letter_I = substr_count($hugeWord, 'i');
		$letter_J = substr_count($hugeWord, 'j');
		$letter_K = substr_count($hugeWord, 'k');
		$letter_L = substr_count($hugeWord, 'l');
		$letter_M = substr_count($hugeWord, 'm');
		$letter_N = substr_count($hugeWord, 'n');
		$letter_O = substr_count($hugeWord, 'o');
		$letter_P = substr_count($hugeWord, 'p');
		$letter_Q = substr_count($hugeWord, 'q');
		$letter_R = substr_count($hugeWord, 'r');
		$letter_S = substr_count($hugeWord, 's');
		$letter_T = substr_count($hugeWord, 't');
		$letter_U = substr_count($hugeWord, 'u');
		$letter_V = substr_count($hugeWord, 'v');
		$letter_W = substr_count($hugeWord, 'w');
		$letter_X = substr_count($hugeWord, 'x');
		$letter_Y = substr_count($hugeWord, 'y');
		$letter_Z = substr_count($hugeWord, 'z');
		$sum = $letter_A + $letter_B+ $letter_C + $letter_D + $letter_E + $letter_F + $letter_G + $letter_H + $letter_I + $letter_J + $letter_K + $letter_L + $letter_M + $letter_N + $letter_O + $letter_P + $letter_Q + $letter_R + $letter_S + $letter_T + $letter_U + $letter_V + $letter_W + $letter_X + $letter_Y + $letter_Z;


		print("A = $letter_A<br>");
		print("B = $letter_B<br>");
		print("sum = $sum<br>");


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