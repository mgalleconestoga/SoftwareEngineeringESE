<?php 
require_once __DIR__ . '/Basic.php';
require_once __DIR__ . '/Premium.php';

$basicCustomer = new Basic(1, 'John', 'Doe', 'jdoe@myemail.com');  
$premiumCustomer = new Premium(2, 'Alex', 'Doe', 'adoe@myemail.com');	   
echo "This is " . $basicCustomer->getFirstname() . " a " . $basicCustomer->getType() . " customer <br />"; 
echo "This is " . $premiumCustomer->getFirstname() . " a " . $premiumCustomer->getType() . " customer <br />";

?>