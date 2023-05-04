<?php
trait PersonMethods {
    public function getFirstname(): string { 
        return $this->firstname;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getId(): int { return $this->id; }
    public function getEmail(): string { return $this->email; } 
}
?>