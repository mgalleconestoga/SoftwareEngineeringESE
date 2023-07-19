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