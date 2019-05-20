<?php 
/*
// Class definitions
class Hotel {
	public $name;
	public $rooms; 
}
class Car {
	public $brand;
	public $color;
	
	public function changeColorToBlue(): string {
		$this->color = "blue"; 
		return;
	}
	
}

// Object instantiations
$hotel1 = new Hotel();  // instance is assigned to variable
$hotel2 = new Hotel();
$car = new Car();

// Assigning properties
$hotel1->name = "Fairmont"; 
$hotel1->rooms = 200; 
$hotel2->name = "Best Western"; 
$hotel2->rooms = 100;
$car->brand = "Ferrari"; 
$car->color = "Red";
*/
?>

<?php 
/*
class Car {
	public $brand;
	public $color;
	
	public function changeColorToBlue() {
		$this->color = "blue"; 
		return;
	}
}
// Object instantiations
$car = new Car();
// Assigning properties
$car->brand = "Ferrari"; 
$car->color = "Red";
// Calling methods
$car->changeColorToBlue(); 
echo "The color of the car is now " . $car->color; 
*/
?>

<?php 
/*
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

$car = new Car("Ferrari", "red");
// $car->color = "blue";     							// Not allowed
$car->changeColorToBlue();   							// Only way to change $color
echo "The object is a " . $car->returnBrandAndColor();  // Only way to access $brand and $color

*/ 
?>

<?php
	/*
	require_once __DIR__ . '/Car.php';
	require_once __DIR__ . '/Hotel.php';
	
	$car = new Car("Ferrari", "red");
	$car->changeColorToBlue();   							
	echo "The object is a " . $car->returnBrandAndColor() . "<br />" ;  
	
	$hotel1 = new Hotel();
	$hotel1->name = "Hilton"; 
	echo "The name of the hotel is the $hotel1->name " . "<br />"; 
	*/
?>


<?php 
/*
	class Elevator {
		private $idNumber; 		// Don't let user re-set this once created (no 'Set' function)
		private $floorNumber;
				
		public function __construct(int $id, int $floor) {
			$this->idNumber = $id;
			$this->floorNumber = $floor; 
		}	
		public function getId(): int {
			return $this->idNumber;
		}	
		public function getFloor(): int {
			return $this->floorNumber; 
		}
		public function setFloor(int $floor){
			$this->floorNumber = $floor;
		}
	}

$elevator1 = new Elevator(1, 3);    // elevator1 has id=1 and starts on floor 3
echo "Elevator " . $elevator1->getId() . " is located on floor " . $elevator1->getFloor();
$elevator1->setFloor(1); 			// Send elevator to floor 1
echo "<br />";
echo "Elevator " . $elevator1->getId() . " is NOW located on floor " . $elevator1->getFloor();

*/
?>


<?php 
/*
	class Elevator {
		private $idNumber; 		
		private $floorNumber;
		private static $lastId = 100;   			// ADDED: STATIC PROPERTY
		
		//public function __construct(int $id, int $floor) {
		public function __construct(int $floor) {   // MODIFIED
			//$this->idNumber = $id;
			$this->idNumber = ++self::$lastId; 		// MODIFIED 
			$this->floorNumber = $floor; 
		}	
		public static function getLastId(): int {	// ADDED: STATIC METHOD TO RETRIEVE 
			return self::$lastId; 					//        STATIC PROPERTY
		}
		public function getId(): int {
			return $this->idNumber;
		}	
		public function getFloor(): int {
			return $this->floorNumber; 
		}
		public function setFloor(int $floor){
			$this->floorNumber = $floor;
		}
	}
$elevator1 = new Elevator(5);    // id=100, floor=5 
$elevator2 = new Elevator(6);    // id=101, floor=6 
$elevator3 = new Elevator(7);    // id=102, floor=7 
echo "Elevator 1 has ID: " . $elevator1->getId() . "<br />";
echo "Elevator 2 has ID: " . $elevator2->getId() . "<br />";
echo "Elevator 3 has ID: " . $elevator3->getId() . "<br />";
echo "Referenced by class - The last ID that was assigned was: " . Elevator::getLastId() . "<br />";
echo "Referenced by object - The last ID that was assigned was: " . $elevator1::getLastId();  
*/
?>

<?php 
	/*
	namespace MyDomain\FastElevator; 
	class Elevator { 
	}
	*/
?>

<?php
	/*
	namespace MyDomain\SlowElevator;
	class Elevator {
	}
	*/
?>

<?php 
	/*
	namespace MyDomain\FastElevator;
	class Hotel { 
	}
	*/
?>

<?php 
	/*
	use MyDomain\FastElevator\Elevator as FastElev; 
	use MyDomain\SlowElevator\Elevator as SlowElev; 
	
	require_once __DIR__ . '/folder1/Elevator.php'; 
	require_once __DIR__ . '/folder2/Elevator.php'; 
	
	$fastElevObject = new FastElev();
	$slowElevObject = new SlowElev();	
	*/
?>

<?php
	/*
	use MyDomain\FastElevator\;   

	require_once __DIR__ . '/folder1/Elevator.php'; 
	require_once __DIR__ . '/folder1/Hotel.php'; 
	
	$fastElevObject = new Elevator();   
	$hotelObject = new Hotel();	
	*/
?>

