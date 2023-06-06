<?php
	/*
	$a = 1; 	$b = 2; 
	if ($a > $b) {
		echo "a > b"; 
	} elseif ($a < $b) {
		echo "a < b";
	} elseif ($a === $b) {
		echo "a === b"; 
	} else {
		echo "Error";		
	}
	*/
?>

<?php 
	/*
	$color = 'red';
	switch ($color) {
		case 'red':
			echo "The color is red";
			break;
		case 'blue':
			echo "The color is blue";
			break;
		case 'green':
			echo "The color is green";
			break;
		default: 							// optional
			echo "The color you chose is not one of the options";
			break;
	}
	*/
?>

<?php 
	/*
	$i = 1;
	while($i < 10) {
		echo $i . " "; 
		$i++; 
	}
	*/
?>


<?php 
	/*
	$i = 1;
	do {
		echo $i . " "; 
		$i++; 
	} while($i < 10);
	*/
?>

<?php 
	/*
	$numbers = [1,2,3,4,5,6,7,8,9,10];
	for($i=0; $i < 10; $i++){
		echo $numbers[$i] . " "; 
	}
	*/
?>


<?php 
	/*
	// 1D Array
	$winners = [
		'first' => 'Ali',
		'second' => 'Bill',
		'third' => 'Peter' ];
	
	// Display list 
	echo "<p>List of winners in the race: </p>";
	foreach ($winners as $keyVariable => $valueVariable) {
		echo $keyVariable . " --> " . $valueVariable . " <br />";
	}
	*/
?>

<?php 
	/*
	// 2D Array
	$winners = [
		['firstName' => 'Ali', 'lastName' => 'Tehrani'], 
		['firstName' => 'Bill', 'lastName' => 'Stefanuk'],
		['firstName' => 'Peter', 'lastName' => 'Roeser']
	];
	
	// Display list 
	echo "<p>List of winners in the race: </p>";
	foreach ($winners as $keyVariable => $valueVariable) {
		echo $keyVariable . " --> " . $valueVariable['firstName'] . 
								" " . $valueVariable['lastName'] . "<br />";
	}
	*/
?>

<?php
	/*
	function addNumbers ($a, $b) {
		$sum = $a + $b; 
		return $sum;
	}
	
	echo "5 + 4 = " . addNumbers(5, 4); 
	*/
?>

<?php
	/*
	function addNumbers ($a, $b, $outputResult = false) {
		$sum = $a + $b; 
		if ($outputResult) {
			echo "$a + $b = " . $sum; 
		}
		return $sum;
	}
	
	addNumbers(5, 4);  // Does not print result, default of $outputResult = false
	addNumbers(5, 4, true);  // Prints result, $outputResults == true
	*/
?>

<?php
	/*
	function changeMe(&$a) {						// Only the function definition has the &
		$a = 5;
		return $a;
	}
	
	$b = 7; 
	echo "The new value of b is: " . changeMe($b);  // Notice no '&' here though
	*/
?>

<?php 
	/*
	declare(strict_types=1);  				// Enforces argument data types
	
	function addNumbers(int $a, int $b, bool $printSum):int {
		$sum = $a + $b; 
		if ($printSum) {
			echo "The sum is: " . $sum;
		}
		return $sum; 
	}
	
	addNumbers(1, 2, true);
	//addNumbers(1, '2', true); 	 			// Fails when strict types is 1
	//addNumbers(1, 'wordString', true);  	// Fails always - cannot transform to int
	*/
?>
