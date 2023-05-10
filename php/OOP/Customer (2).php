<?php 
    require_once __DIR__ . '/Person.php';

    interface Customer {
        // Abstract methods that classes that implement this interface are forced to implement 
        public function getMonthlyFee();
        public function getAmountToBorrow(); 
        public function getType();
    }

?>
