<?php

namespace Son\Controller;

abstract class Action {
    protected $view;
    private $action;

    public function __construct() {
		// uma classe vazia, que ainda nao foi criada
		$this->view = new \stdClass;
	}

    protected function render($action, $layout = TRUE) {
        $this->action = $action;

        // se layout for verdadeiro a aplicacao ultiliza um template
        if($layout == TRUE && file_exists("../App/Views/layout.phtml")) {
            include_once "../App/Views/layout.phtml";
        }else{
            $this->content();
        }
	}
    // metodo contenta acessa o url da barra de endereços
    protected function content() {
        $currentClass = get_class($this);
		// Controller vem do nome da classe(indexController) 
		$singleClassName = strtolower((str_replace("Controllers", "", str_replace("App\\Controllers\\", "", $currentClass))));
		// include agora recebe a action atual acessada
		include_once "../App/Views/".$singleClassName."/".$this->action.".phtml";
    }
}