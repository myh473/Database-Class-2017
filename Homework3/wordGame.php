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
</body>
</html>