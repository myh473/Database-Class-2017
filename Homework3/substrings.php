<html>
<head>
	<title>Substrings</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>All Posible Substrings</h1>

	<?php 
		$randomLetters = $_SESSION["letters"];
		
		$tmpString="";
		$count=0;
		
		print($randomLetters.count);
		
		feof( $k=0; $k<$randomLetters.count; $k++)
		{
			print("<tr> <td> substr($randomLetters[$k]) </td> </tr>");
		}
		
		for($i=(($randomLetters.count)-1); $i>0; $i--)
		{
			for($j=0;j<(($randomLetters.count-1)-$i);$j++)
			{
			print ("<tr> <td> substr($tmpString, $j, $i )(  </td> </tr>");
			}
		}
	
	?>
	</body>
	</html>