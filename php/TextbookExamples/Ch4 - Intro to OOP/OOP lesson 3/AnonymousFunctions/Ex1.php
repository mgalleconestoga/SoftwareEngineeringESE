<?php
// Anonymous Functions
$greet = function($name) {          // Think of $greet as a function pointer that points to the function code 
    echo "Hello $name";
};   // Note the semicolon                

// Call the anonymous function
$greet('World'); 

?>