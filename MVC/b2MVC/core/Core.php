<?php
class Core{

    public function run() {
        // recebe a url acessada e apaga td que estivar antes deo index.php
        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        // $url sera oque estiver depois de index.php
        $url = end($url);
    
        if(!empty($url)) {
            // precisa usar explide novamente para retirar a / do controller
            $url = explode("/", $url);
            // retirar espaço em branco que exite no inicio
            array_shift($url);
            
            // classes do Controller possuem a palavra Controller no fim.
            $currentController = $url[0]."Controller";
            
            // se for acessado algun diretorio da aplicacao $url recebe [1]
            if(isset($url[1])) {
                $currentAction = $url[1];
            }else {
                $currentAction = "index";
            }
        }else{
            $currentController = "HomeController";
            $currentAction     = "index";
        }
        // chamando o core
        require_once "core/Controller.php";

        // chamando o controller atual
        $c = new $currentController();
        // chamando a action atual
        $c->$currentAction();

    }
}