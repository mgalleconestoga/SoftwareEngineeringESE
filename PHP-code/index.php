<?php 
	//require 'index.html';  
	//echo 'hello world';	
?>


<?php 
	/* valid / invalid variable names and data types */ 
/*_variable_a = 1;  		// Valid name, int variable
	$a_variable = 2.1; 		// Valid name, float variable
	$Boolean_1_var = true;	// Valid name, bool variable
	$stringVar = "My name"; // Valid name in camelCase, string variable 	
	$variable = 1;    		// invalid variable name
*/
?>

<?php 
/*
	/* Type Juggling */ 
	$a = "1";  				// string character
	$b = 2; 				// integer
	$c = $a + $b;			// results in 1 + 2 = 3 (converted "1" to integer 1)
	$d = $a . $b;			/* '.' is string concatenation so this results in 
							 * "1" . "2" --> "12" (converted 2 to "2" based on context '.')
							 */

?>


<?php 
/*
	$str = '    This is a string that I wrote    ';  
	echo $str . "<br />";
	echo strlen($str). "<br />";					// 37
	$str = trim($str);								// This is a string that I wrote 
	echo $str . "<br />"; 
	echo strlen($str). "<br />";					// 29
	echo strtoupper($str) . "<br />";				// THIS IS A STRING THAT I WROTE
	echo strtolower($str) . "<br />";				// this is a string that i wrote
	$str = str_replace('string', 'sentance', $str); // This is a sentance the I wrote 
	echo $str . "<br />";
	echo substr($str, 0, 3) . "<br />"; 			// Thi
	echo strpos($str, 'This') . "<br />"; 			// 0
	echo "Michael " . "Galle" . "<br />"; 			// Michael Galle
	
	$firstName = 'Michael';
	echo "My name is $firstName. My last name is \"Galle\" " . "<br />"; 
*/
?>

<?php
/*
	// Array initialization
	$emptyArr = [];  // empty array
	$nameArr = ['Michael', 'Jack', 'Ali'];  // names array
	$sameNameArr = [						// same as nameArr
		0 => 'Michael',
		1 => 'Jack',
		2 => 'Ali'
	];
	$statusArr1 = [ 
					'name' => 'Michael',
					'status' => 'Awake'
					];
*/
?>


<?php
	/*
	$str = '';
	$arr = [];
	$names = ['John', 'Julie', 'Alex'];
	print_r($names);			// Prints array 
	var_dump(empty($arr));  	// returns true (1)
	var_dump(empty($str));  	// returns true (1)
	var_dump(empty($names));  	// returns false
	var_dump(isset($names[0])); // returns true (1)
	var_dump(isset($names[3])); // returns false
	*/
?>


<?php
/*
	$names = ['John', 'Julie', 'Alex'];
	var_dump(in_array('John', $names));  	// returns true (1)
	var_dump(in_array('Mike', $names));  	// returns false
	
	var_dump(array_search('John', $names));  	// returns 0
	var_dump(array_search('Mike', $names));  	// returns false
*/
?>

<?php /*
class InvalidInputException extends Exception {}
class AlternateInvalidInputException extends Exception {}

function getInput(int $input) {
	if ($input < 0) {
			throw new InvalidInputException(); 										
	} else if ($input === 0) {
			throw new AlternateInvalidInputException(); 		  
	} else {
			throw new Exception();
	}
}
try {
	getInput(1);		// Try -1, 0, 1				
} catch (InvalidInputException $e) {			// Catch blocks used in order they appear (only one will execute)
	echo 'Input must not be negative';		
} catch (AlternateInvalidInputException $e) {		
	echo 'Input must not be zero';		
} catch (Exception $e) {						// Must come last since this handles all exceptions   
	echo 'Input is acceptable';					// If this comes first none of the others will be executed
} 
*/
?>

<?php
/*
$greet = function($name, $functionName, array $myArray) {		
	echo "Hello $name <br />";
	echo "The sum of the array is " . $functionName($myArray) . "<br />"; 
}; 												

$sum = 0;  
$takeSum = function(array $myArray) use ($sum) {// use keyword allows $takeSum to inherit $sum	from parent scope	
	foreach ($myArray as $element) {
		$sum += $element; 
	}
	return $sum;  
};												
$numbers = [1,2,3,4,5]; 						// Sum is 15
$greet('Mr. President', $takeSum, $numbers); 	

$numbers2 = [1,2,3,4,5,6]; 						// Sum is 21
$greet('Joe', $takeSum, $numbers2); 	
*/
?>

<?php /*
function greet($name, $functionName, array $myArray) {		
	echo "Hello $name <br />";
	echo "The sum of the array is " . $functionName($myArray); 
} 												
 
function takeSum(array $myArray) {			
	$sum = 0;
	foreach ($myArray as $element) {
		$sum += $element; 
	}
	return $sum;  
}											
$numbers = [1,2,3,4,5]; //array(1,2,3,4,5); 	// Sum is 15
greet('Mr. President', 'takeSum', $numbers); 	// 'takeSum' passed to greet as an argument
*/
?>

