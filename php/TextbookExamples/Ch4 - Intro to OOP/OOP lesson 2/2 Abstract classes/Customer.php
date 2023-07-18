<?php 
require_once __DIR__ . '/Person.php';
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
?>