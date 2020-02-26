<?php

// palindrome
$line = "Step on no pets";

function isPalindrome($lineVar){
    $lineVar = strtolower($lineVar); 
	for($i = 0; $i < strlen($lineVar)/2; $i++){
        //echo $lineVar[$i];
        //echo "</br>";
        //echo $lineVar[(strlen($lineVar)-1-$i)];
		if($lineVar[$i] != $lineVar[(strlen($lineVar)-1-$i)]){
			return false;
		}
	}
	return true;
}

if (isPalindrome($line) == 1)
    echo "True";
else
    echo "False";

echo "<br>";
// sort array

$array = array(1,5,-2,4,3);

function sortArray($arrayVar){
    $arraySize = count($arrayVar);
    for($i = 0; $i < $arraySize; $i++){
        for($j = $i+1; $j < $arraySize; $j++){
            // if the array[i] value is greater then array[j] val
            // then swap the two
            // continue for entire array
            if($arrayVar[$i] > $arrayVar[$j]){
                $tempVal = $arrayVar[$i];
                $arrayVar[$i] = $arrayVar[$j];
                $arrayVar[$j] = $tempVal;
            }
        }
    }
    return $arrayVar;
}

print_r(sortArray($array));
?>