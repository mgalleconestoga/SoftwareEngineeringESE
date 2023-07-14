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
    require_once __DIR__ . '/Customer.php';
    require_once __DIR__ . '/Person.php';
    class Basic extends Person implements Customer {			// Child of Person but also implements the interface customer
        public function getMonthlyFee(): float { return 2.0; }
        public function getAmountToBorrow(): int { return 1 ;}
        public function getType(): string { return 'Basic';}
    }
?>