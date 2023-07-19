<?php 
// This file is used tp show how to define a Class in its own separate file (See OOP_Basics.php)
class Car {
	private $brand;
	private $color;
	
	public function __construct (string $objBrand, string $objColor = "red") {
		$this->brand = $objBrand;
		$this->color = $objColor; 	
	}
	public function changeColorToBlue() {
		$this->color = "blue"; 
		return;
	}
	public function returnBrandAndColor() : string {
		return $this->color . " " . $this->brand; 
	}
}
?>

