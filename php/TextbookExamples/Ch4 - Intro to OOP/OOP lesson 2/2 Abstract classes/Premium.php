<?php
    // Child of abstract class customer thar is forced to implement the abstract functions
    require_once __DIR__ . '/Customer.php';
	class Premium extends Customer {
		public function getMonthlyFee(): float { return 10.0;}
		public function getAmountToBorrow(): int { return 10;}
		public function getType(): string { return 'Premium';}
}
?>