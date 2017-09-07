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
		$sqrtArray = array();
		$squareArray = array();
		$randUpArray = array();
		$stringArray = array();
		$areaArray = array();
		$volArray = array();
	if(is_numeric($min) && is_numeric($max) && is_numeric($arraySize) && $arraySize > 0 ) {
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
			$number = abs ($numArray[$i]);	
			$sqrtArray[$i] = sqrt($number);
		}
		for ($i = 0; $i < $arraySize; $i++) {
			$number = $numArray[$i];
			$number = pow ($number , 2);
			$squareArray[$i] = $number;
		}
		for ($i = 0; $i < $arraySize; $i++) {
			if ($numArray[$i] >= 0) {
				$stringArray[$i] = "Positive";
			}
			else {
				$stringArray[$i] = "Negative";
			}
		}
		for ($i = 0; $i < $arraySize; $i++) {
				$number = pi() * pow ($numArray[$i], 2);
				$areaArray[$i] = $number;
		}
		for ($i = 0; $i < $arraySize; $i++) {
			$number = abs ($numArray[$i]);
			$number = pow ($number , 3);
			$number = (1/6 * pi() * $number);
			$volArray[$i] = $number;
		}
				for ($i = 0; $i < $arraySize; $i++) {		//FOR TESTING
			print("<p> Num $i = $numArray[$i]<br></p>");
			echo "SquareRoot is " . number_format($sqrtArray[$i],3)."<br>";
			echo "squared is " . number_format($squareArray[$i],3)."<br>";
			print("<p> String is $i = $stringArray[$i]<br></p>");
			echo "Area is " .number_format($areaArray[$i],3)."<br>";
			echo "Volume is " . number_format($volArray[$i],3)."<br>";
		}
}
		else{
	print("<h1>What ya doin there?</h1>");
	}
	?>
	<p><a href="arrayDemo.html">Click here to try again.</a></p>
</body>
</html>
	