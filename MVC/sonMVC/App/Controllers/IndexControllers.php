<?php

namespace App\Controllers;
use App\Models\Cliente;

class IndexControllers extends \Son\Controller\Action{
	
	// metodos que seram usados pela array $route da classe Route logo acima;
	public function index() {
		// setando um objeto para a classe view
		$clienDb = new Cliente();
		$this->view->selSb = $clienDb->fetchAll(); 

		// se o parametro de render for : $this->render("index", FALSE); o template nao sera
		// carregado pq o uso dele esta setado como FALSE;
		$this->render("index");
		
	}	
	public function empresa() {
        $this->render("empresa");
	}

	
}
