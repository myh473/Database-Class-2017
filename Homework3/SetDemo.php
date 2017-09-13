<!DOCTYPE html>
<!--	Author: David Schwab
		Date:	September 7, 2016
		File:	2016-09-07 Files.php
		Purpose:Example of Reading a multiple records into a 2D array
-->
<html>
<head>
	<title>2D Arrays and Files</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<?php
		$str1 = "bob";
		$str2 = "fred";
		$str3 = "sally";
		//associative array used as a Set - Recall the Set data structure is useful for quickly adding / removing elemnents
		//and checking for the existence of elements in a set.  This is what we need for our dictionary in HW3
		$set[$str1] = 0; //don't care about the value here
		$set[$str2] = 0;
		$set[$str3] = 0;
	
		//pre tag is for preformated text ... use with print_r - 
		//allows the html page to Not ignore newlines and spacing within print
		print("<pre>");
		print_r($set); 	//for printing an array
		print("</pre>");
		
		print("<p>");
		if(array_key_exists("bob", $set)) {
			print("bob exists!!!");
		} else {
			print("bob does NOT exist!!!");
		}
		print("</p>");
		print("<p>");
		if(array_key_exists("tom", $set)) {
			print("tom exists!!!");
		} else {
			print("tom does NOT exist!!!");
		}
		print("</p>");
		
		//remove a key
		unset($set["bob"]);
		print("<p>");
		if(array_key_exists("bob", $set)) {
			print("bob exists!!!");
		} else {
			print("bob does NOT exist!!!");
		}
		print("</p>");
		?>
</body>
</html>