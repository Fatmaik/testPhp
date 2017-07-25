<?php

class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        require "View/".$viewName.".php";
    }

    public function loadTemplate($viewName, $viewData = array()) {
        require "View/Template.php";
    }
}