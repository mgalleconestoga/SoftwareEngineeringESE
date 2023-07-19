<?php
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
		return '<h1>' . $this->model->text . '</h1>';  
	}
}
class Controller {						// Writes to the Model
	private $model;
	public function __construct(Model $model) {
		$this->model = $model;
	}
}
// Initialize the Model, View and Controller
$model = new Model();
$view = new View($model);  				// View and controller share the same model
$controller = new Controller($model);

// Output the data in the Model to the View 
echo $view->output();
?>