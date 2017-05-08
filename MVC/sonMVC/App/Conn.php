<?php

namespace App;

abstract class Conn {

    protected static function getCon() {
        try{
            return new \PDO("mysql:dbname=MVC;host=localhost");
        }catch(PDOException $e) {
            echo "Connection Fail: " . $e->getMessage();
        }
    }
}