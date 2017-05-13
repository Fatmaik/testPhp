<?php

namespace App;

class Conn {
    
    public static function getCon() {
        return new \PDO("mysql:dbname=MVC;host=localhost", "root", "rancid");
        
    }
}