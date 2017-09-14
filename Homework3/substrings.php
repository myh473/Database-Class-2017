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
		feof($randomLetters)
		{
			$tmpString.=$randomLetters;
		}
		
		for($i=((randomLetters.count)-1); $i>0; $i--)
		{
			for($j=0;j<((randomLetter.count-1)-$i);$j++)
			{
			print ("<tr> <td> substr($tmpString, $j, $i )(  </td> </tr>");
			}
		}
	
	?>
	</body>
	</html>