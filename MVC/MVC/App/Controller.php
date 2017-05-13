<?php

namespace App;

class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
    }
}