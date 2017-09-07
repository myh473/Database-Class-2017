<!-- Author: Schwab
-->
<html>
<head>
	<title>Array Demo</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<h1>Here's your array partner!</h1>
	
	<?php
		$arraySize = $_POST['arraySize'];
		$min = $_POST['min'];
		$max = $_POST['max'];
		$numArray = array();

	if(is_numeric($min) && is_numeric($max) && is_numeric($arraySize) ) {
		if($min < $max) {
		print("<p> arraysize = $arraySize min = $min max = $max<br></p>");
		}

		else{
			print("<p> arraysize = $arraySize min = $max max = $min<br></p>");
		}


		for ($i = 0; $i < $arraySize; $i++) {
			$numArray[$i] = rand($min ,$max);

		}

		for ($i = 0; $i < $arraySize; $i++) {
			print("<p> Num $i = $numArray[$i]<br></p>");

		}
	}
		else{
	print("<h1>What ya doin there?</h1>");
	}
	?>
	<p><a href="arrayDemo.html">Click here to try again.</a></p>
</body>
</html>
