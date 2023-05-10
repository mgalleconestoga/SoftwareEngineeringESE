<?php 
/*
class Basic extends Customer {
	public function getMonthlyFee(): float { return 5.0;}
	public function getAmountToBorrow(): int { return 3;}
	public function getType(): string { return 'Basic';}
}
*/
?>

<?php
class Basic extends Person implements Customer {			// Child of Person but also implements
	public function getMonthlyFee(): float { return 5.0;}	// the interface Customer
	public function getAmountToBorrow(): int { return 3;}
	public function getType(): string { return 'Basic';}
}
?>
