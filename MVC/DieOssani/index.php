<!DOCTYPE html>
<?php
require_once 'Config.php';
spl_autoload_register(function ($className) {
    if(file_exists("controllers/".$className.".php")) {
        require_once "controllers/".$className.".php";
    }
    if(file_exists("models/".$className.".php")) {
        require_once "models/".$className.".php";
    }
    if(file_exists("core/".$className.".php")) {
        require_once "core/".$className.".php";
    } 
});
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    
    <?php
    $cont = new Core();
    $cont->run();
    ?>
    
    
</body>
</html>