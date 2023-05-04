<?php
    require_once __DIR__ . '/Customer.php';
    require_once __DIR__ . '/Person.php';
    class Basic extends Person implements Customer {
        public function getMonthlyFee(): float { return 2.0; }
        public function getAmountToBorrow(): int { return 1 ;}
        public function getType(): string { return 'Basic';}
    }
?>