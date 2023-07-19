<?php
// Inheritance & polymorphism
class InvalidInputException extends Exception {
    public function __construct($message = null) {  // message is null if no input provided
        $message = $message ?: 'Input cannot be negative'; // Elvis operator
        parent::__construct($message);              // Call the parent constructor with the message    
    }
}

function getInput(int $input) {
    if($input < 0) {
        //throw new InvalidInputException();                                // Without message
        throw new InvalidInputException('Error: Input cannot be negative');        // With message
    } else {
        throw new Exception('Input acceptable');   
    }
}

try {
    getInput(-1);               
} catch(Exception $e)  {        // Example of polymorphism since this catch block takes children of the Exception class
    echo $e->getMessage();      
} 
?>