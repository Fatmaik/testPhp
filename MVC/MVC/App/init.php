<?php
namespace App;

// use MVC\Init\Bootstrap;
// class Init extends Bootstrap{
class Init {
    private $currentController;
    private $currentAction;

    // protected function initRoutes() {
    //     $routes['home'] = array("route"=>"/","controller"=>"indexController","action"=>"index");
    //     $routes["empresa"] = array("route"=>"/empresa","controller"=>"indexController","action"=>"empresa");
    //     $this->setRoutes($routes);
    // }

    public function run() {
        // pega a url e formata para aparecer do /index em diante
        $url = substr($_SERVER['PHP_SELF'], 33);
        $url = explode('/', $url);
            array_shift($url);
        // se a url nao estiver em default(index) o controler e action seram setados com os valores que recever.
        if(!empty($url)) {
            
             
            $this->currentController = $url[0]."Controller";
            if(isset($url[1])) {
                $currentAction = $url[1];
            }else{
                $currentAction = "index";
            }
        }else{
            $currentController = "homeController";
            $currentAction = "index";
        }

    }
   
} 