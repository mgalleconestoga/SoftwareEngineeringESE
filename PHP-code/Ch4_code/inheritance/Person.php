<?php
/*
class Person {											// Parent
	protected $firstname;
	protected $surname; 
	
	public function __construct(string $firstname, string $surname) { 
		$this->firstname = $firstname; 
		$this->surname = $surname; 
	}
	public function getFirstname(): string { return $this->firstname; }
	public function getSurname(): string { return $this->surname; }
}
*/
?>


<?php
require_once __DIR__ . '/PersonMethods.php';
class Person {											
	protected $firstname;
	protected $surname; 
	private $id;
	private $email; 
	
	public function __construct(int $id, string $firstname, string $surname, string $email) {
		$this->id = $id; $this->email = $email; 					
		$this->firstname = $firstname; $this->surname = $surname; 			
	}
	use PersonMethods;
}
?>

