<?php
    // Anonymous functions can use variables from parent scope, so they do not have to be passed as arguments
    // The 'use' keyword means to use the value the variable had when first encountered in the parent scope
    // Changes to the value of this variable within the function scope are not kept in succesive calls
    
    $greet = function($name, $functionName, array $myArray) {          
        echo "<br/>Hello $name, ";
        echo "the sum of the array you gave me is " . $functionName($myArray);
    };   
    
    $sum = 0;       // Variable in parent scope (unchanged within function scope)

    $takeSum = function(array $myArray) use ($sum) {    // 'use' means inherit value of $sum from parent scope ('use' value it had when first read - i.e., 0)
        foreach ($myArray as $element) {
            $sum += $element;
        }
        return $sum; 
    };  
    
    $numbers = [1,2,3,4,5];                         
    $greet('Mr. President', $takeSum, $numbers);        // Sum is 15  

    $numbers2 = [1,2,3,4,5,6];                         
    $greet('Mr. Vice President', $takeSum, $numbers2);   // Sum is 21  

?>