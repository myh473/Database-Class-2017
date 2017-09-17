<html>
<head>
	<title>Substrings</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">

</head>

<body>
	<h1>All Posible Substrings</h1>

	<?php 
		$randomLetters = $_POST['randomLetters[1]'];
		
		$tmpString="";
		$count=0;
		
		print(" <p> sizeof($randomLetters) </p>");
		/*
		feof( $k=0; $k<$randomLetters.count(); $k++)
		{
			print("<p> substr($randomLetters[$k])  </p>");
		}
		
		for($i=(($randomLetters.count())-1); $i>0; $i--)
		{
			for($j=0;j<(($randomLetters.count()-1)-$i);$j++)
			{
			print ("<tr> <td> substr($tmpString, $j, $i )(  </td> </tr>");
			}
		}
		*/
		
	?>
	</body>
	</html>