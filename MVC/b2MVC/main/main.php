<?php
class Main{

    private $currentController;
    private $currentAction;

    public function index() {
        $url = $_SERVER['PHP_SELF'];
        
        if(!empty($url)) {

        }else{
            $this->currentController = "homeController";
            $this->currentAction     = "index";
        }
    }
}