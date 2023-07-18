<?php 
// Child of abstract class customer thar is forced to implement the abstract functions
require_once __DIR__ . '/Customer.php';
class Basic extends Customer {
	public function getMonthlyFee(): float { return 5.0;}
	public function getAmountToBorrow(): int { return 3;}
	public function getType(): string { return 'Basic';}
}
?>