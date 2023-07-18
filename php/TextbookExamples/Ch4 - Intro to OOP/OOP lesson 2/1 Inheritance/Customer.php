<?php
require_once __DIR__ . '/Person.php';
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
?>