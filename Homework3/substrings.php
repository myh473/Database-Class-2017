<html>
<head>
	<title>Substrings</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>All Posible Substrings</h1>

	<?php 
		 session_start();

		 $substrings = fopen("substrings.txt", "w");
		 
		 $randomLetters = $_SESSION['randomLetters'];
		 
		 $toString = implode($randomLetters);
		 
		
		
		$tmpString="";
		
		
		
		

		for($span=sizeof($randomLetters); $span>0; $span--) {
			
			
			for($j=0; $j<(sizeof($randomLetters)-$span); $j++){
				
				$newSub = substr($toString, $j, $span);
				
				echo " Size $span: $newSub <br>";
				fwrite($substrings, $newSub);
			
			}
			
		}
		
		
		

		fclose($substrings);
		
	?>
	<form action = "wordGame.php" method = "post" >
	<input type = "submit" value = "Back">
	</form>
	<form action = "logout.php" method = "post" >
	<input type = "submit" value = "Start Over">
	</body>
	</body>
	</html>