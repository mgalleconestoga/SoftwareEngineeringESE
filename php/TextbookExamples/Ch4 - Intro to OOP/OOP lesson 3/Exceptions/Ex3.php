<?php
function getInput(int $input) {
    if($input < 0) {
        throw new Exception('Input cannot be negative');        // Exception 1
    } else {
        throw new Exception('The input value is acceptable');   // Exception 2
    }
}

try {
    getInput(-1);               // Exception thrown in getInput()
} catch(Exception $e)  {        // Exception caught
    echo $e->getMessage();      // Different message depending on which Exception is thrown
}
?>