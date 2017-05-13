<?php

class Core{

    private $currentController;
    private $currentAction;

    public function run() {
        $url = substr($_SERVER["PHP_SELF"], 10);
        echo $url;
    }
}