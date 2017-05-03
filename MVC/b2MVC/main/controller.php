<?php

class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($vieeData);
        include "views/".$viewName.".php";
    }
}