<?php
    $input = -1;        // Cause exception to be thrown
    // $input = 1;      // Exception not thrown

    try {
        if($input < 0) {
            throw new Exception('Input cannot be negative');
        } else {
            echo "The input is acceptable";
        }

    } catch (Exception $e) {        // Type hinting is mandatory, $e is argument of the object thrown
        echo $e->getMessage();      // method of the Exception class, returns message
    }

?>