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
            function numArgs() {
                $arr = func_get_args(); // todos os valores de parametros entrarao no array
                $coun = func_num_args(); // count.
                $soma = 0;
                for($i=0; $i<$coun; $i++) {
                    $soma += $arr[$i];
                }
                return $soma;
            }
            echo numArgs(10, 20, 30);
        ?>
    </div>
</body>
</html>