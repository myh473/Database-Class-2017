
<link rel ="stylesheet" type="text/css" href="sample.css">
	<?php
print_r(AllPermutations(array('peter', 'paul', 'mary')));

function AllPermutations($InArray, $InProcessedArray = array())
{
    $ReturnArray = array();
    foreach($InArray as $Key=>$value)
    {
        $CopyArray = $InProcessedArray;
        $CopyArray[$Key] = $value;
        $TempArray = array_diff_key($InArray, $CopyArray);
        if (count($TempArray) == 0)
        {
            $ReturnArray[] = $CopyArray;
        }
        else
        {
            $ReturnArray = array_merge($ReturnArray, AllPermutations($TempArray, $CopyArray));
        }
    }
    return $ReturnArray;
}
	?>