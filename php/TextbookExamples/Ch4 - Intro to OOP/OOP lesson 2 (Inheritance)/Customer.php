<?php
/*
class Customer extends Person {										// Child
	private $id;
	private $email; 
	
	public function __construct(int $id, string $firstname, string $surname, string $email) {
		$this->id = $id; $this->email = $email; 					// Properties from this class
		//$this->firstname = $firstname; $this->surname = $surname; // inherited from Parent class (Person)
		parent::__construct($firstname, $surname); 					// Calls the constructor of the parent
	}
	public function getId(): int { return $this->id; }				// Method from this class
	public function getEmail(): int { return $this->email; }		// Method from this class
	// getFirstname() inherited from parent class (Person) --> Don't need to duplicate
	// getSurname() inherited from parent class (Person) --> Don't need to duplicate
}
*/
?>


<?php 
/*
abstract class Customer extends Person {										
	private $id;
	private $email; 
	
	public function __construct(int $id, string $firstname, string $surname, string $email) {
		$this->id = $id; $this->email = $email; 					// Properties from this class
		parent::__construct($firstname, $surname); 					// Calls the constructor of the parent
	}
	public function getId(): int { return $this->id; }				// Method same for all children
	public function getEmail(): int { return $this->email; }		// Method same for all children
	
	// Abstract methods Children forced to implement separately
	abstract public function getMonthlyFee(); 			 
	abstract public function getAmountToBorrow(); 		
	abstract public function getType(); 	
}	
*/
?>

<?php 
    require_once __DIR__ . '/Person.php';
    interface Customer {
        // Abstract methods that classes that implement this interface are forced to implement 
        public function getMonthlyFee();
        public function getAmountToBorrow(); 
        public function getType();
    }

?>
