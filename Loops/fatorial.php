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
           $num = $_GET["num"];
           
           // var pega valor de $num para fazer a subtracao
           $i = $num;
           // var para calcular a multiplicacao do fatorial
           $x = 1;

           echo "Fatorial de $num: ";
           do{
               // var pega o valor de $num e subtrai 1
               $fat = "$i x ";
               $i--;
               $x *= $fat;
              
               if($fat == 1){
                    $fat = ($i+1)." = ";
               }
               echo $fat;
            }while($i > 0);
            echo $x;
         ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="button">Back</a>
        
    </div>
</body>
</html>