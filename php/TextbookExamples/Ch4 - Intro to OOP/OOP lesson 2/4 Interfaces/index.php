<?php 

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Basic.php';
require_once __DIR__ . '/Premium.php';

// Polymorphic functions that accept concrete classes that 'implement' the Customer Interface
// namely 'Premium' and 'Basic'
function customerType(Customer $person) {  	 
	return $person->getType(); 			 
} 
function getName(Customer $person) {
	return $person->getFirstname();
}

$basicCustomer = new Basic(1, 'John', 'Doe', 'jdoe@myemail.com');  
$premiumCustomer = new Premium(2, 'Alex', 'Doe', 'adoe@myemail.com');	   
echo "This is " . getName($basicCustomer) . " a " . customerType($basicCustomer) . " customer <br />"; 
echo "This is " . getName($premiumCustomer) . " a " . customerType($premiumCustomer) . " customer <br />";

?>