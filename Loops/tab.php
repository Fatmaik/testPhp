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
           $tab = isset($_GET["tab"])?$_GET["tab"]:1;

           echo " Taboada de : $tab<br>";
           for ($i = 1; $i <= 10; $i++){
               $r = $tab*$i;
               echo "$tab x $i = $r<br>";
               }
         ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="button">Back</a>
        
    </div>
</body>
</html>