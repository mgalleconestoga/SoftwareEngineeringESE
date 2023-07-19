<?php
$takeSum = function(array $myArray) {
    $sum = 0;
    foreach ($myArray as $element) {
        $sum += $element;
    }
    return $sum; 
};  // note the semicolon

$numbers = [1,2,3,4,5];                         // alternate: array(1,2,3,4,5); 
echo "The sum is " . $takeSum($numbers);        // 15

?>