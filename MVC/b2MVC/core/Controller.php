<?php

class Controller {
    // $viewName = classe que for chamada dentro do diretorio views
    // $viewData = recebe um array com valores qeu vc imformar antes de chamar o metodo loadView no controller
    public function loadView($viewName, $viewData = array()) {
        // como se fosee o foreach de cada elemento
        extract($viewData);
        include "views/".$viewName.".php";
    }
}