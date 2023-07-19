<?php
// Exception type hinting. 
class InvalidInputException extends Exception { }
class AlternateInvalidInputException extends Exception { }

function getInput(int $input) {
    if($input < 0) {
        throw new InvalidInputException('Input cannot be negative');        
    } else if($input === 0) {
        throw new AlternateInvalidInputException('Input cannot be 0');   
    } else {
        throw new Exception('Input acceptable');
    }
}

try {
    //getInput(-1);                     // throws InvalidInputException()
    //getInput(0);                      // throws AlternateInvalidInputException()
    getInput(1);                        // throws Exception()
} catch(InvalidInputException $e)  {        
    echo $e->getMessage();      
} catch(AlternateInvalidInputException $e)  {        
    echo $e->getMessage();      
} catch(Exception $e)  {        
    echo $e->getMessage();      
} 
?>