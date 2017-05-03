<?php
class Main{

    public function run() {
        $url = $_SERVER['PHP_SELF'];
        
        if(!empty($url)) {
            $url = explode("/", $url);
            array_shift($url);
            $currentController = $url[0]."controller";

            // se for acessado algun diretorio da aplicacao $url recebe [1]
            if(isset($url[1])) {
                $currentAction = $url[1];
            }else {
                $currentAction = "index";
            }
        }else{
            $currentController = "homeController";
            $currentAction     = "index";
        }
        require_once "core/controller.php";

        $c = new $currentController();
        $c->currentAction;
    }
}