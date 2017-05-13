<?php

namespace App\Controllers;

use Son\Controller\Action;
use Son\DI\Container;

class IndexControllers extends Action{
	
	// metodos que seram usados pela array $route da classe Route logo acima;
	public function index() {
		// setando um objeto para a classe view
		$client = Container::getModel("MVC1");
		$this->view->selSb = $clienDb->selectAll(); 

		// se o parametro de render for : $this->render("index", FALSE); o template nao sera
		// carregado pq o uso dele esta setado como FALSE;
		$this->render("index");
		
	}	
	public function empresa() {
        $this->render("empresa");
	}

	
}
