<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <?php
            $msg = isset($_GET["msg"])?$_GET["msg"]:"vazia";

            echo "<span style='color: white; font-size: 70px; text-align: center;'> $msg </span><br>";




           
        ?>
        <a href="http://localhost/CursoPHP/olaMundo/test.html"><button class="button">Voltar</button></a>
    </div>
    
</body>
</html>