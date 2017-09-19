<html>
<head>
	<title>Score</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>How'd you do?</h1>

	<?php 
		
		session_start();
		
		$_SESSION['answers']=$_POST['answers'];//Wrong?
		
		print_r($_POST['answers']);


		if(!isset($_SESSION['answers']) || $_SESSION['answers'] == '') {

			
			print("<pre>Remember to enter words!?");
			
			print("</pre>");
		}

		else {
		
		if(!isset($_SESSION['words'])) {

			
			print("<pre>Are you cheating?");
			
			print("</pre>");
		}
		else {
			
			checkScore($_SESSION['answers']);
			
			print("<pre>In the Else");
			print_r($_SESSION['randomLetters']);
			print("</pre>");
		}
	}
		
		function checkScore ($responses){
			$checkerArray = $_SESSION['words']; //Wrong?
			
			
			$responseArray= explode(" ", $responses);

			$total= sizeof($checkerArray);
			$score=0;
			
			foreach($responseArray as $r){
				
				if (in_array($r, $checkerArray)) {
				$score++;
}
			}
			
			print("<br>you got $score out of $total possible words!");
			
			
			
			
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
	</form>
	<form action = "logout.php" method = "post" >
	<input type = "submit" value = "Start Over">
	</body>
	</html>