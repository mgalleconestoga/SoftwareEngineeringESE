<?php
    require_once __DIR__ . '/Customer.php';
    require_once __DIR__ . '/Person.php';
    class Premium extends Person implements Customer {
        public function getMonthlyFee(): float { return 20.0 ; }
        public function getAmountToBorrow(): int { return 10;}
        public function getType(): string { return 'Premium';}
    }
?>