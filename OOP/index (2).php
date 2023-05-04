<?php
    require_once __DIR__ . '/Person.php';
    require_once __DIR__ . '/Customer.php';
    require_once __DIR__ . '/Premium.php';
    require_once __DIR__ . '/Basic.php';

    //$person1 = new Person('Michael', 'Galle');
    //echo $person1->getFirstname();
    //echo $person1->getSurname();

 //
 //   $cust1 = new Customer(1, 'Dhrup', 'Stuff', 'dhrup@email.com'); 
 //   echo "<br/>";
 //   echo $cust1->getFirstname();
 //   echo $cust1->getEmail();
    
    $basic1 = new Basic(2,'Alex', 'Word', 'word@email.com'); 
    //echo '<br />';
    //echo $basic1->getFirstname() . " is a " . $basic1->getType() . " customer <br/>";
    $premium1 = new Premium(3, 'Robyn', 'Desk', 'desk@desk.com');

    // Polymorphic function
    function customerType(Customer $cust) {
        return $cust->getType(); 
    }

    echo '<br/>' . $basic1->getFirstname() . " is a " . customerType($basic1) . " customer <br/>";
    echo '<br/>' . $premium1->getFirstname() . " is a " . customerType($premium1) . " customer <br/>";

?>
