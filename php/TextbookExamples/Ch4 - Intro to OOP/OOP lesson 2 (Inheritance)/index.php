<?php 
/*
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Customer.php';

$customer1 = new Customer(1, 'Michael', 'Galle', 'mgalle@conestogac.on.ca'); 
echo "The customers first name is: " . $customer1->getFirstname() . "<br />";
echo "getFirstname() is a public method of the parent class 'Person', inherited by the 'Customer' class"; 
*/
?>

<?php 
/*
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Basic.php';
require_once __DIR__ . '/Premium.php';

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

*/
?>

