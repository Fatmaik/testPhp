<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="css/estilo.css">
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery.js"></script>
    <script src="js/javascript.js"></script>
    <style>
        span .txt{
            color: <?php echo $color; ?>;
            font-size: <?php echo $tamanho; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $text = "null" != $_GET["t"]?$_GET["t"]:"Vazio";
            $tamanho = "null" != $_GET["tam"]?$_GET["tam"]:"10px";
            $cor = "null" != $_GET["cor"]?$_GET["cor"]:"#000000";
           
            echo "<span class='txt'> $text </span>";
        ?>
    
        <br>
        <a href="http://localhost/CursoPHP/testPhp/testcss/css.html"><button type="button">voltar</button></a>
    </div>
    
</body>
</html>