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
			for ($i = 0; $i < $arraySize; $i++) {
			$tmpNum=rand(0,5);
			$number = pow ($numArray[$i] , $tmpNum);
			$randUpArray[$i] = $number;
		}
		

		print("<table border = \"2\"> <tr>
			<th>X</th>
			<th>Sq. Rt x</th>
			<th>x^2</th>
			<th>X^rand(0,5)</th>
			<th>Pos/Neg/Zero</th>
			<th>Area of X radius circle </th>
			<th>volume of sphere X diameter</th>
		</tr>");
		
		

		
		
			for ($j = 0; $j < $arraySize; $j++) {
			$a = number_format($sqrtArray[$j],3);
			$b = number_format($squareArray[$j],3);
			$c = number_format($randUpArray[$j],3);
			$d = number_format($areaArray[$j],3);
			$e = number_format($volArray[$j],3);
			
			
			
			print("<tr>	<td>$numArray[$j]</td>
			<td class =\"center\">$a</td>
			<td class =\"center\">$b</td>
			<td class =\"center\">$c</td>
			<td class =\"center\">$stringArray[$j]</td>
			<td class =\"center\">$d</td>
			<td class =\"center\">$e</td>
		</tr>");
		}
		
		print("</table>");
}
		else{
	print("<h1>What ya doin there?</h1>");
	}
	?>
	<p><a href="arrayDemo.html">Click here to try again.</a></p>
</body>
</html>
	