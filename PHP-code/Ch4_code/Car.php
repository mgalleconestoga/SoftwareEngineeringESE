<?php 
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

