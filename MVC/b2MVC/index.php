<!DOCTYPE html>
<?php
spl_autoload_register(function ($className) {
    if(file_exists("controllers/".$className.".php")) {
        require_once "controllers/".$className.".php";
    }
    if(file_exists("models/".$className.".php")) {
        require_once "models/".$className.".php";
    }
    if(file_exists("main/".$className.".php")) {
        require_once "main/".$className.".php";
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
    <form action="" id="form">
        nome:
        <input type="text" name="nome"><br>
        senha:
        <input type="text" name="senha"><br><br>
        <input type="submit">
    </form><br><br>
    <div id="div"></div>
    <div id="div1"></div>
    <?php
    $cont = new testController();
    $cont->imprimir();


    echo "<br>";

    $mod = new testModels();
    $mod->imprimir();

    echo "<br>";

    $oMod = new otroModel();
    $oMod->imprimir();

    echo "<br>";

    $main = new Main();
    $main->index();
    ?>
    
    
</body>
</html>