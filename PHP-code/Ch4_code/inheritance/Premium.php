<?php
/*
class Premium extends Customer {
	public function getMonthlyFee(): float { return 10.0;}
	public function getAmountToBorrow(): int { return 10;}
	public function getType(): string { return 'Premium';}
}
*/
?>

<?php
class Premium extends Person implements Customer { 			// Child of Person but also implements
	public function getMonthlyFee(): float { return 10.0;}	// the interface Customer
	public function getAmountToBorrow(): int { return 10;}
	public function getType(): string { return 'Premium';}
}
?>
