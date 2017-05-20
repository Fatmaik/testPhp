<?php

class Connect{
    protected $db;

    public function __construct() {
        global $config;
        $host   = $config["host"];
        $dbname = $config["dbname"];
        $dbuser = $config["dbuser"];
        $dbpass = $config["dbpass"];
        $this->db = new \PDO("mysql:dbname=". $dbname . ";host=".$host, $dbuser, $dbpass);
        
    }
}