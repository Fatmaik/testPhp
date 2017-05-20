<?php

class HomeController extends Controller{

    public function index() {
        $usuario = new Contas();
        // obs o "nome" ao ser mandado para a view se tranforma em $nome
        // sendo assim possivel fazer um foreach no $nome;
        $dados["nome"] = $usuario->getNome();

        

        // o Home se refere ao arquivo e classe Home.php, se mudar alguma letra
        // ele para de funcionar
        $this->loadTemplate("Home", $dados);
    }
}