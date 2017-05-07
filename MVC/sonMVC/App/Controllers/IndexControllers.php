<?php

namespace App\Controllers;

class IndexControllers {
	private $view;
	
	public function __construct() {
		// uma classe vazia, que ainda nao foi criada
		$this->view = new \stdClass;
	}
	// metodos que seram usados pela array $route da classe Route logo acima;
	public function index() {
		// setando um objeto para a classe view
		$this->view->ling = array("Java", "php"); 
		include_once "../App/Views/Index/index.phtml"; 
		
	}	
	public function empresa() {
        include_once "../App/Views/Index/empresa.phtml";
	}
}
