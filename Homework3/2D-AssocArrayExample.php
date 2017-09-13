<!DOCTYPE html>
<!--	Author: David Schwab
		Date:	September 11, 2016
		Purpose:Example of Reading a multiple records into a 2D array
-->
<html>
<head>
	<title>Company Info</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<?php
		$debug = false;
		//construct a 2 D array of company info
		$companyName = $_POST['companyName'];
		print("<p>You searched for $companyName</p>");
		
		$companies['UPS'] = array('name'=>"UPS", 'street'=>"123 Abc Lane", 'phone'=>"123-4567", 'email'=>"contact@ups.com");
		$companies['FedEx'] = array('name'=>"FedEx", 'street'=>"567 Xyz Lane", 'phone'=>"321-4567", 'email'=>"contact@fedex.com");
		$companies['UTC'] = array('name'=>"UTC", 'street'=>"783 Lmnop Lane", 'phone'=>"123-0001", 'email'=>"contact@utc.edu");
		$companies['McKee Foods'] =array('name'=>"McKee Foods", 'street'=>"123 Ghi Lane", 'phone'=>"333-4567", 'email'=>"contact@mckee.com");
		
		 //debug
		if($debug) {
			print("<pre>");
			print_r($companies);
			print("</pre>");
		}
		
		//note the use of isset to make sure we have the info
		if(isset($companies[$companyName])) {
			print("<p>Here's the info for $companyName</p>");
			print("<table border = 2><tr>");
			//note the foreeach loop to dyanmically generate the headers
			foreach($companies[$companyName] as $key => $value) {
				print("<th>$key</th>");
			}
			print("</tr>");
			//as well as the data - using keys / values from the array
			foreach($companies[$companyName] as $key => $value) {
				print("<td>$value</td>");
			}
			print("</tr></table>");
		} else {
			
			print("<p>Sorry, we don't have information for $companyName</p>");
			//print here the whole array in a table with all company info
			//use nested loops
		}
		
		
		?>
</body>
</html>