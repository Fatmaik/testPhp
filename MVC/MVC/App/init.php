<?php
namespace App;

class Init {
    private $routes;

    public function __contruct() {
        $this->setRoutes();
    }

    public function iniRoutes() {
        $route['home'] = array("route"=>"/","controller"=>"index","action"=>"index");
        $this->setRoutes($route);
    }
    public function setRoutes(array $routes) {
        $this->routes = $routes;
    }
    public function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}