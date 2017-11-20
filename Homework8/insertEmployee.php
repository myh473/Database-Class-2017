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
	
	
	 		$a = implode([$_POST['empLastName']]);
			$b = implode([$_POST['empFirstName']]);
			$c = implode([$_POST['empEmail']]);
			$d = implode([$_POST['empStoreID']]);
			$e = implode([$_POST['empAddress']]);
			$f = implode([$_POST['empCity']]);
			$g = implode([$_POST['empDistrict']]);
			$h = implode([$_POST['empPostalCode']]);
			$i = implode([$_POST['empPhoneNumber']]);
	
	$sql =" INSERT INTO address (address, address2,district,city_id,postal_code,phone,last_update) VALUE ('52 Top Ramen dr', null, 'Gonzo', '580', '35555', '4236023950', 'right now');";
	$sql2 =" SELECT max(address_id) FROM address;";
	
	
	
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$result = $conn->query($sql2);

	while($row = mysqli_fetch_assoc($result)) {
		//	$aID = $row["address_id"];
		}

			$sql3 ="INSERT INTO staff (first_name, last_name, address_id, email, store_id) VALUE ($b, $a, 500, $c, 1;";
	
	if ($conn->query($sql3) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
	}
			
			print("<table border = \"2\"> <tr>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Email Address</th>
			<th>Store ID</th>
			<th>Address</th>
			<th>City ID</th>
			<th>District</th>
			<th>Postal Code</th>
			<th>Phone Number</th>
			</tr>");

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
	/*else {
		echo "No results";
	}*/
	?>





</body>
</html>