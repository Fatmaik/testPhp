<?php
require "Config.php";
spl_autoload_register(function ($className) {
    if(file_exists("Controller/".$className.".php")) {
        require_once "Controller/".$className.".php";
    }
    if(file_exists("Model/".$className.".php")) {
        require_once "Model/".$className.".php";
    }
    if(file_exists("Core/".$className.".php")) {
        require_once "Core/".$className.".php";
    }
});

$core = new Core();
$core->run();


