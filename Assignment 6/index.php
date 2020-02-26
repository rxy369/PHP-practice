<?php
/*
1.
Given the following of pets containing the items ('dog', 'cat', 'fish', 'bird', 'iguana'); display the following text, pulling the animal types from the pets array.
Result: "You can adopt a dog, a cat, or a bird from the animal sanctuary."

2. 
Display the state and state capital from the below array $statecaps. 
Sort the list by the name of the capital. 
$statecaps = array("Washington => Olympia", "Oregon => Salem", "California => Sacramento",
"Alaska => Juneau", "Hawaii => Honolulu", "Idaho => Boise", "Nevada => Carson City",
"Arizona => Phoenix") ;

3.
Insert a new item in an array with elements 1, 2, 3, 4, 5, 6
Result: The array should now contain 1,2,3,4, 42, 5, 6

4.
Given an array of weekÅfs temperatures containing the items 32, 47, 55, 30, 42, 39, 45, calculate and display the average temperature as well as display the lowest and highest temperature in the week.
Result Average temp this week : 41.4 Lowest temp: 30 Highest temp : 55
*/

//1
$pets = array('dog', 'cat', 'fish', 'bird', 'iguana');
echo "You  can adopt a {$pets[0]}, {$pets[1]}, or a {$pets[2]} from the animal sanctuary.";

echo "<br>";
echo "<br>";

// 2
$statecaps = array("Washington" => "Olympia", "Oregon" => "Salem", "California" => "Sacramento",
"Alaska" => "Juneau", "Hawaii" => "Honolulu", "Idaho" => "Boise", "Nevada" => "Carson City",
"Arizona" => "Phoenix") ;

asort($statecaps);
$state_string = "";

foreach($statecaps as $state => $state_val){
	$state_string .= "State= " . $state . ", Capitol= " . $state_val;
    $state_string .= "\n";
}
echo nl2br($state_string);
echo "<br>";

//3
$nums = array(1,2,3,4,5,6);
$add = array(42);
array_splice($nums, 3, 0, $add);
print_r($nums);
echo "<br>";
echo "<br>";

//4
$temps = array(32,47,55,30,42,39,45);
$avg = array_sum($temps)/count($temps);
$max = max($temps);
$min = min($temps);
echo "Average temp this week: ".round($avg,1)." Lowest Temp: ". $min." Highest Temp: ".$max;
?>


<DOCTYPE html>
<html>

	<head>
		<title>Assignment 6</title>
	</head>

	<body>
	<!--
		<h1>Assignment 6 </h1>
		<label>Part 1</label>
		<span> <?php echo htmlspecialchars("You can adopt a {$pets[0]}, {$pets[1]}, or a {$pets[2]} from the animal sanctuary"); ?> </span>
		<br>

		<label>Part 2</label>
		<span> <?php echo htmlspecialchars($state_string); ?> </span>
		<br>

		<label>Part 3</label>
		<span> <?php print_r($nums); ?> </span>
		<br>

		<label>Part 4</label>
		<span> <?php echo htmlspecialchars("Average temp this week: ".round($avg,1)." Lowest Temp: ". $min." Highest Temp: ".$max); ?> </span>
		<br>
	-->
	</body>

</html>


