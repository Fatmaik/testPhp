<?php

class homeController extends Controller {

    public function index(){
        $classGet  = new classGet();
      

        $dados["select"] = $classGet->selAll();

        $this->loadView("Template", $dados);
    }
}