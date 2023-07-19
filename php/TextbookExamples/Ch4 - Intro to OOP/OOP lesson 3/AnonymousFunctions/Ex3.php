<?php
    // Anonymous functions are callable (can be used as input arguments in another function)
    
    $greet = function($name, $functionName, array $myArray) {          
        echo "Hello $name, ";
        echo "the sum of the array you gave me is " . $functionName($myArray);
    };   
    
    $takeSum = function(array $myArray) {
        $sum = 0;
        foreach ($myArray as $element) {
            $sum += $element;
        }
        return $sum; 
    };  
    
    // Call the anonymous function
    $numbers = [1,2,3,4,5];                         // alternate: array(1,2,3,4,5); 
    $greet('Mr. President', $takeSum, $numbers);    // $takeSum passed to $greet as argument

?>