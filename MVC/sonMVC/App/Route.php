<?php
namespace App;
// use Son\Init\Bootstrap;
class Route {
    // metodo para settar as rotas
    protected function initRoutes() {
        $routes['home'] = array('route'=>'/','controller'=>"IndexControllers",'action'=>'index'); // index e um metodo
        $routes['empresa'] = array('route'=>'/empresa','controller'=>"IndexControllers",'action'=>'empresa'); //contact e um metodo
        $this->setRoutes($routes);
    }
    private $routes;
    
    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }
    

    // metodo para rodar a aplicacao
    protected function run($url) {
        // esta funcao eh semelhante ao foreach para pegar oq esta na url
        array_walk($this->routes,function($route) use ($url) {
           if($url == $route['route']) {
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class();
                $action = $route['action'];
                $controller->$action();     
            }       
        });	
    }

    // metodo para setar as rotas
    protected function setRoutes(array $routes) {
        $this->routes = $routes;

    }
    
    protected function getUrl() {
        // retorna a url de quam esta acessando;
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}  


