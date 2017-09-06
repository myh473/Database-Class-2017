<!-- Author: Schwab
-->
<html>
<head>
	<title>Array Demo</title>
</head>

<body>
	<h1>Here's your array partner!</h1>
	
	<?php
		$arraySize = $_POST['arraySize'];
		$min = $_POST['min'];
		$max = $_POST['max'];
		$numArray = array();

		print("<p> arraysize = $arraySize min = $min max = $max<br></p>");

		for ($i = 0; $i < $arraySize; $i++) {
			$numArray[$i] = rand($min ,$max);

		}

		for ($i = 0; $i < $arraySize; $i++) {
			print("<p> Num $i = $numArray[$i]<br></p>");

		}
	?>
	<p><input type = "submit" value = "give er a go!"></p>
</body>
</html>
