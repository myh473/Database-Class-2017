<html>
<head>
	<title>Insert Employee</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>


	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "sakila";
	$conn = new mysqli($servername, $username, $password, $dbName);
	if ($conn->connect_error) {
		die("Connection failed" . $conn->connect_error);
	}
	echo "Connected successfully<br>";
	
	
	$a = $row[$_POST['empLastName']];
			$b = $row[$_POST['empFirstName']];
			$c = $row[$_POST['empEmail']];
			$d = $row[$_POST['empStoreID']];
			$e = $row[$_POST['empAddress']];
			$e = $row[$_POST['empCity']];
			$f = $row[$_POST['empDistrict']];
			$g = $row[$_POST['empPostalCode']];
			$h = $row[$_POST['empPhoneNumber']];
	
	$sql =" INSERT INTO address (address, address2,district,city_id,postal_code,phone,last_update) VALUE ("51 Top Ramen dr", null, "Gonzo", "580", "35555", "4236023950", "right now");";
	$sql2 =" select max(a.address_id), a.address_id FROM address a;";
	$sql3 ="INSERT INTO staff (staff_id, first_name, last_name, address_id, picture, email, store_id, active, username, password, last_update) VALUE (3, "Tom", "Squanch", 580, "tom.S@yourmoms.com", 1,1,"Tom","password", "this moment");"";
	
	
	$result = $conn->query($sql);
	
			
			print("<tr> <td>$a</td>
				<td class = \"center\">$b</td>
				<td class = \"center\">$c</td>
				<td class = \"center\">$d</td>
				<td class = \"center\">$e</td>
				<td class = \"center\">$f</td>
				<td class = \"center\">$g</td>
				<td class = \"center\">$h</td>
				<td class = \"center\">$i</td>
				</tr>");
		
		print("</table>");
	}
	else {
		echo "No results";
	}
	?>





</body>
</html>