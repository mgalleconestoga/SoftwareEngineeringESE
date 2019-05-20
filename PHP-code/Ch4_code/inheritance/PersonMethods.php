<?php 
trait PersonMethods {
	public function getFirstname(): string { return $this->firstname; }
	public function getSurname(): string { return $this->surname; }
	public function getId(): int { return $this->id; }						// Moved from Person
	public function getEmail(): int { return $this->email; }				// Moved from Person
}	
?>

