<?php

namespace App\Controller;

class IndexController {
	
	// metodos que seram usados pela array $route da classe Route logo acima;
	public function index() {
		echo "rota: / controlelr : index"; 
        
	}
	
	public function contact() {
        echo "rota: /contact controler: contact";


	}

}
