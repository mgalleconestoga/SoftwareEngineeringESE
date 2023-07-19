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
?>