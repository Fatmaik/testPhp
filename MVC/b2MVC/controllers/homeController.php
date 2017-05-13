<?php

class HomeController extends Controller{

    public function index() {
        $usuario = new Usuario();
        $usuario->setNome("dionathan");
        $usuario->getNome();
        
        $dados = ["nome"=>$usuario->getNome()];

        // o Home se refere ao arquivo e classe Home.php, se mudar alguma letra
        // ele para de funcionar
        $this->loadView("Home", $dados);
    }
}