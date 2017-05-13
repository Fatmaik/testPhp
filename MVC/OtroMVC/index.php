<?php
spl_autoload_register(function ($class) {
    // se tiver a paravra Controller na classe.
    if(strpos($class, "Controller") > -1) {
        if(file_exists("Controllers/".$class.".php")) {
            require_once "Controllers/".$class.".php";
        }
    }elseif(file_exists("Models".$class.".php")) {
        require_once "Models/".$class.".php";
    }else{
        require_once "core/".$class.".php";
    }
    
});

$core = new Core();
$core->run();
