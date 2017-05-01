<?php
spl_autoload_register(function ($className) {
    require_once "controlles/".$className.".php";
});
class testModels extends testController {

}