<?php
	$Meal_Cost = 19.40;
	if($Meal_Cost < 20)
		echo "Good Price<br>";
	else if($Meal_Cost > 20 && $Meal_Cost < 40)
		echo "Reasonably Priced<br>";
	else if($Meal_Cost > 40)
		echo "This is pricey<br>";
	else
		echo "Is this even a number?";


	# loop and random number generator
	$randNum = rand(5,7);
	for ($i = 1; $i < 11; $i++){
		if($i == $randNum){
			echo nl2br($randNum." is your random number\n");
		}
		else{
			echo nl2br($i."\n");
		}
	}
?>