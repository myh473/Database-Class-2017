
<html>
<head>
    <title>Word Game</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
    <h1>Nice Permutations Partner</h1>

    <?php
    session_start();
    $Permutations = array(array());
    $randomLetters = $_SESSION['randomLetters'];

    $Permutations = AllPermutations($randomLetters);
    $_SESSION['Permutations'] = array_2d_to_1d($Permutations);


function AllPermutations($items, $perms = array( )) {
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
        print("push string = $pushString<br>");
        $output_array[] = $pushString;
      }
     // $output_array[] = $pushString;
      $pushString = null;
    }

    return $output_array;
}

    ?>
    <form action = "words.php" method = "post" >
    <input type = "submit" value = "Possible Words">
    </form>
</body>
</html>