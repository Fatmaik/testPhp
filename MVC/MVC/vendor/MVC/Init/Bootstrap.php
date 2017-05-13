<?php
namespace MVC\Init;

abstract class Bootstrap {
    private $routes;
    

    public function __contruct() {
        $this->iniRoutes();
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    protected function run($url) {
        array_walk($this->routes, function($route) use ($url) {
            if($url == $route['route']) {
                $class = "App\\controller\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }
    protected function setRoutes(array $routes) {
        $this->routes = $routes;
    }
    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}