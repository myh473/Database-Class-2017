<html>
<head>
	<title>Word Game</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>Here are your random letter pal</h1>

	<?php 
		$letterAmount = $_POST['letterAmount'];
		$randomLetters = array();
	for($i = 0; $i < $letterAmount; $i++) {
		$randomLetters[$i] = chr(rand(97,122));
		print ("<tr> <td> $randomLetters[$i] </td> </tr>");
	}
	?>
	<h2></h2>
	<form action = "substrings.php" method = "post" >
	<input type = "submit" value = "Substrings">
	</form>
	<form action = "permutations.php" method = "post" >
	<input type = "submit" value = "Permutations">
	</form>
	<form action = "words.php" method = "post" >
	<input type = "submit" value = "Possible Words">
	</body>
	</html>