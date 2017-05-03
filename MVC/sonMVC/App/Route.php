<?php
namespace App;

class Route extends Bootstrap{
    
    // metodo para settar as rotas
    protected function initRoutes() {
        
        $routes['home'] = array('route'=>'/','controller'=>"indexController",'action'=>'index'); // index e um metodo
        $routes['contact'] = array('route'=>'/contact','controller'=>"indexController",'action'=>'contact'); //contact e um metodo
        $this->setRoutes($routes);
    }  
}