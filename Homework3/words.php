<html>
<head>
	<title>Word Game</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>The words file</h1>

	<?php 
		session_start();
		$engmix = fopen("engmix.txt", "r");
		$substrings = fopen("substrings.txt", "r");
		$permutations = fopen("permutations.txt", "r");
		$lines = file($engmix, FILE_IGNORE_NEW_LINES);
		fclose($engmix);
		fclose($substrings);
		fclose($permutations);
	$_SESSION["letters"]
	?>
	</body>
	</html>