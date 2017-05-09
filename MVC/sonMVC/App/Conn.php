<?php

namespace App;

class Conn {

    public static function getCon() {
        try{
            return new \PDO("mysql:dbname=MVC;host=localhost", "root", "rancid");
        }catch(PDOException $e) {
            echo "Connection Fail: " . $e->getMessage();
        }
    }
}