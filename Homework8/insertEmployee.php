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


	$sql = "SELECT s.last_name, s.first_name, a.address, c.city, a.district, co.country, a.postal_code, s.email, a.phone FROM staff s, address a, city c, country co WHERE s.address_id = a.address_id AND a.city_id = c.city_id AND c.country_id = co.country_id;";
	$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {

		print("<table border = \"2\"> <tr>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Address</th>
			<th>City</th>
			<th>District</th>
			<th>Country</th>
			<th>Postal Code</th>
			<th>Email Address</th>
			<th>Phone Number</th>
		</tr>");

		while($row = mysqli_fetch_assoc($result)) {


			$a = $row["last_name"];
			$b = $row["first_name"];
			$c = $row["address"];
			$d = $row["city"];
			$e = $row["district"];
			$f = $row["country"];
			$g = $row["postal_code"];
			$h = $row["email"];
			$i = $row["phone"];


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

		}
		print("</table>");
	}
	else {
		echo "No results";
	}



	?>





</body>
</html>