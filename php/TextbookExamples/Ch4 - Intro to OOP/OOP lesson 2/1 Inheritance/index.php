<?php 
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Customer.php';

$customer1 = new Customer(1, 'Michael', 'Galle', 'mgalle@conestogac.on.ca'); 
echo "The customers first name is: " . $customer1->getFirstname() . "<br />";
echo "getFirstname() is a public method of the parent class 'Person', inherited by the 'Customer' class"; 
?>