<?php

class Connect {
    public $db;

    public function __construct() {
        global $config;
        $host   = $config["host"];
        $dbname = $config["dbname"];
        $dbuser = $config["dbuser"];
        $dbpass = $config["dbpass"];
        
        // return $this->db = new \PDO("mysql:dbname=". $dbname . ";host=".$host, $dbuser, $dbpass); 
        return $this->db = new \PDO("mysql:dbname=test;host=localhost", "root", "rancid");           
    }

}


