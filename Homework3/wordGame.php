<html>
<head>
	<title>Word Game</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>Here are your random letter pal</h1>

	<?php 
		session_start();
		if(!isset($_SESSION['letterAmount'])) {

			$_SESSION['letterAmount'] = $_POST['letterAmount'];	
			$randomLetters = array();

			$_SESSION["letters"] = $randomLetters;
			for($i = 0; $i < $_SESSION['letterAmount']; $i++) {
			$randomLetters[$i] = chr(rand(97,122));
			print ("<tr> <td> $randomLetters[$i] </td> </tr>");
			}
			$_SESSION['randomLetters'] = $randomLetters;
			print("<pre>In the IF");
			print_r($_SESSION['randomLetters']);
			print("</pre>");
		}
		else {
			print("<pre>In the Else");
			print_r($_SESSION['randomLetters']);
			print("</pre>");
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