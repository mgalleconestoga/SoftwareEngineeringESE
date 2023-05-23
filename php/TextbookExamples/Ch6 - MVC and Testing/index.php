<?php
/*
class Model {							// Stores the data
	public $text;
	public function __construct() {
		$this->text = 'Hello world!';
	}
}
class View {							// Accesses data in Model
	private $model;
	public function __construct(Model $model) {
		$this->model = $model; 
	}
	public function output() {
		return '<a href="index.php?action=textClicked">' . $this->model->text . '</a>';  // UPDATED
	}
}
class Controller {						// Writes to the Model
	private $model;
	public function __construct(Model $model) {
		$this->model = $model;
	}
	public function textClicked() {		// NEW
		$this->model->text = 'Updated Text, Hello There!';
	}
}
// Initialize the Model, View and Controller
$model = new Model();
$view = new View($model);  				// View and controller share the same model
$controller = new Controller($model);

// NEW -- Here we check if the link was clicked using the GET array 
if (isset($_GET['action'])) {
	$controller->{$_GET['action']}();  // Call the function stored in the GET array at GET['action'] 
}
// Output the data in the Model to the View 
echo $view->output();
*/
?>


<?php
class Model {																
	private $baseValue = 0;
	private $rates = [ 'GBP' => 1.0, 'USD' => 0.6, 'EUR' => 0.83, 'YEN' => 0.0058 ];   
	public function get($currency) {												   
		if (isset($this->rates[$currency])) {
			$rate = 1/$this->rates[$currency];
			return round($this->baseValue * $rate, 2);
		} else 
			return 0;
	}
	public function set($amount, $currency = 'USD') {
		if (isset($this->rates[$currency])) {
			$this->baseValue = $amount * $this->rates[$currency];
		}
	}
}
class View {															
	private $currency;
	private $model;
	public function __construct(Model $model, $currency) {
		$this->currency = $currency;
		$this->model = $model;		// Model object passed 
	}
	public function output() {		// action=convert  --> name of the function in the controller to call
		$html = '<form action="?action=convert" method="post">		
					<input name="currency" type="hidden" value="' . $this->currency . '"/>
					<label>' . $this->currency . ':</label>
					<input name="amount" type="text" value="' . $this->model->get($this->currency) . '" />
					<input type="submit" value="Convert"/>
				</form>';
		return $html;		
	}
}
class Controller {														
	private $model; 
	public function __construct(Model $model) {
		$this->model = $model; 
	}
	public function convert($request) {
		if (isset($request['currency']) && isset($request['amount'])) {
			$this->model->set($request['amount'], $request['currency']);
		}
	}
}

// Object instantiations
$model = new Model;							
$controller = new Controller($model);  
if (isset($_GET['action'])) 				// Check if $_GET['action'] has changed
	$controller->{$_GET['action']}($_POST);	// $_GET['action'] element stores the name of the function in the controller (i.e. 'convert') to call  
$eurView = new View($model, 'EUR');	
$usdView = new View($model, 'USD');
$gbpView = new View($model, 'GBP');
$yenView = new View($model, 'YEN');
echo $eurView->output(); 
echo $usdView->output(); 
echo $gbpView->output(); 
echo $yenView->output(); 








?>






