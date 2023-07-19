<?php
function getInput(int $input) {
    if($input < 0) {
        throw new Exception('Input cannot be negative');
    } else {
        echo "The input value is acceptable"; 
    }
}

try {
    getInput(-1);               // Exception thrown in getInput()
} catch(Exception $e)  {        // Exception caught
    echo $e->getMessage();
}
?>