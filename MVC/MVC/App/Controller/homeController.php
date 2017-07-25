<?php

class homeController extends Controller{

    public function index() {
        $dados["test"] = "test";
        $this->loadTemplate("error", $dados);
    }  
}