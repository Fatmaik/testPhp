<?php
require "Environment.php";

// od dados de Config podera ser usada em outras partes da aplicacao
global $config;
$config = array();
if(ENVIRONMENT == "development") {
    $config["dbname"] = "test";
    $config["host"]   = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "rancid";
}else{
    $config["dbname"] = "MVC";
    $config["host"]   = "localhost";
    $config["dbuser"] = "root";
    $config["dbpass"] = "rancid";
}