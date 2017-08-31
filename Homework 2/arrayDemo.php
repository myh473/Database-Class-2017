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

		print("<p> arraysize = $arraySize min = $min max = $max</p>");
	?>
	<p><input type = "submit" value = "give er a go!"></p>
</body>
</html>
