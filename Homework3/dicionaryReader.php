<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	write-scores.php
		Purpose:Example of Writing data to a file
-->
<html>
<head>
	<title>Here are your letters</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<pre>
<body>
	<?php

		$dictionary = fopen("namesDictionary.txt","r");
		while (!feof($dictionary)) {
			//foef works oddly so you have to do this:
			$word = fgets($dictionary);
			//***********IMPORTANT NEXT STEP********************//
			//strip off newline character
			//$word = substr($word, 0, strlen($word)-2);
			
			//from https://stackoverflow.com/questions/3059091/how-to-remove-carriage-returns-from-output-of-string
			$word = str_replace(array("\n", "\r"), '', $word);
			if(!feof($dictionary)) {
				$words[$word] = $word; //
				//print("<p>$words[$word], $word</p>");
				
			}
		}
		fclose($dictionary);
		
		$names = array('fred'=>"fred", 'sally'=>"sally", 'david'=>"david", 'tommy'=>"tommy",
			'zulu' => "zulu");
		
		foreach($names as $key => $value) {
			//first time through loop $key is "fred", $value is "fred"
			if(isset($words[$key])) {
				print("<p>$key is on the list!!!</p>");
			} else {
				print("<p>$key is NOT on the list!!!</p>");
			}
			
		}
		foo("hello");
		
	?>
	<?php
		function foo($arg1) {
				print("hello from foo");
		}
	?>
</body>
</pre>
</html>