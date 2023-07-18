<?php
class Person {
    protected $firstname;
    protected $surname;
    private $id;
    private $email;

    public function __construct(int $id, string $firstname, string $surname, string $email) {
        $this->firstname = $firstname; $this->email = $email;
        $this->id = $id; $this->email = $email;         // Moved up to person from Customer
    }
    
    // Implemented functions
    public function getFirstname(): string { return $this->firstname;}
    public function getSurname(): string { return $this->surname; }
    public function getId(): int { return $this->id; }  // Implementation moved up from Customer            
    public function getEmail(): int { return $this->email;} // Implementation moved up from Customer    
}

?>