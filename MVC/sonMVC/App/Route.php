<?php
namespace App;

class Route extends \Son\Init\Bootstrap{
    // metodo para settar as rotas
    protected function initRoutes() {
        $routes['home'] = array('route'=>'/','controller'=>"IndexControllers",'action'=>'index'); // index e um metodo
        $routes['empresa'] = array('route'=>'/empresa','controller'=>"IndexControllers",'action'=>'empresa'); //contact e um metodo
        $this->setRoutes($routes);
    }
}  


