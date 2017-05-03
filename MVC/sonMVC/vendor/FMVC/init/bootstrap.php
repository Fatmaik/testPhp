<?php
namespace vendor\FMVC\init;

abstract class Bootstrap {
    private $routes;
    
    public function __construct() {
        $this->iniRoutes();
        $this->run($this->getUrl());
    }
    
    // metodo para settar as rotas
    abstract protected function initRoutes();

    // metodo para rodar a aplicacao
    protected function run($url) {
        array_walk($this->routes,function($route) use ($url) {
            if($url == $route['route']) {
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });	
    }

    // metodo para setar as rotas
    protected function setRoute(array $routes) {
        $this->routes = $routes;

    }
    
    protected function getUrl() {
        // retorna a url de quam esta acessando;
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

    }
}