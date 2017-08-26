<?php

class Parse {

	public $controller = "PotoController";
	public $action = "accueil";
	public $get = "motclef";

	public function __construct() {
		$this->verif();
	}

	public function verif() {
		if(isset($_GET['controller']) && isset($_GET['action'])) {
			$this->controller = $_GET['controller'];
			$this->action = $_GET['action'];
			return true;
		}
		else {
			return false;
		}
	}

	public function callController() {
		$tmp = $this->action;
		include("Controller/" . $this->controller . ".php");
		$po = new $this->controller();
		$po->$tmp();
	}
}

$app = new Parse();
$app->callController();