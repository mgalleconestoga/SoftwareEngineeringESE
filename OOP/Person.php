<?php
require_once __DIR__ . '/PersonMethods.php';
class Person {
    protected $firstname;
    protected $surname;
    private $id;
    private $email;

    public function __construct(int $id, string $first, string $last, string $email) {
        $this->firstname = $first;
        $this->surname = $last;
        $this->id = $id;
        $this->email = $email;
    }

    use PersonMethods; 
    
}

?>
