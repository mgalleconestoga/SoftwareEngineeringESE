<?php
require_once __DIR__ . '/PersonMethods.php';
class Person {											
	protected $firstname;
	protected $surname; 
	private $id;
	private $email; 
	
	public function __construct(int $id, string $firstname, string $surname, string $email) {
		$this->id = $id; 				$this->email = $email; 					
		$this->firstname = $firstname; 	$this->surname = $surname; 			
	}

	// Copy paste the trait in PersonMethods.php
	use PersonMethods; 
	
}
?>




