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
            $inicio = $_GET["num1"];
            $final = $_GET["num2"];
            $inc = $_GET["inc"];

            echo "Numero inicial: $inicio<br>";
            echo "Numero Final: $final<br>";
            echo "Numero de incremento: $inc<br>";

            if($inicio < $final) {
                $i = $inicio;
                while($i <= $final) {
                    echo $i ." ";
                    $i += $inc;
                }
            }else if($inicio === $final) {
                echo "Numeros Iguais";
             
             }else if($inicio > $final) {
                $i = $inicio;
                while ($i >= $final) {
                    echo $i ." ";
                    $i -= $inc;
                }
                 echo $i--;
            }   
         ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="button">Back</a>
        
    </div>
</body>
</html>