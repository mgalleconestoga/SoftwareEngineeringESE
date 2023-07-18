<?php
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
?>