
<html>
<head>
    <title>Word Game</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
    <h1>Nice Permutations Partner</h1>

    <?php
    session_start();
    $permutations = fopen("permutations.txt", "w");
    permDriver();

function permDriver(){
	 $Permutations = array(array());
    $randomLetters = $_SESSION['randomLetters'];

    $Permutations = AllPermutations($randomLetters);
    $_SESSION['Permutations'] = array_2d_to_1d($Permutations);
    $output_array = $_SESSION['Permutations'];

   foreach($output_array as $key => $value) {
         //  string  $tranVar = "";
         //  $tranVar = $output_array[$key];
         //  fwrite($permutations, $tranVar);
          }
}

function AllPermutations($items, $perms = array( )) {
	//base case
    if (empty($items)) {
        $return = array($perms);
    }  else { 
        $return = array();
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             $newperms = $perms;
         list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             $return = array_merge($return, AllPermutations($newitems, $newperms));
         }
    }
    return $return;
}

function array_2d_to_1d ($input_array) {
    $output_array = array();
    $pushString = null;

    for ($i = 0; $i < sizeof($input_array); $i++) {
      for ($j = 0; $j < sizeof($input_array[$i]); $j++) {
        $pushString .= $input_array[$i][$j];
        $tranArray[] = $pushString;
        $output_array[$tranArray[$i]] = $tranArray[$i];
      }
      $pushString = null;
    }

    print("<pre>Sorted Permutations<br>");
    print_r($output_array);
    print("</pre>");

    return $output_array;
}

    fclose($permutations);

    ?>
    <form action = "words.php" method = "post" >
    <input type = "submit" value = "Possible Words">
    </form>
	<form action = "wordGame.php" method = "post" >
	<input type = "submit" value = "Back">
	</form>
	<form action = "logout.php" method = "post" >
	<input type = "submit" value = "Start Over">
	</form>
	</body>
</body>
</html>