<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Functions</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <?php
            function media(...$valor) {
                $len = count($valor);
                $media = array_sum($valor) / $len;
                return $media;
            }
            
            echo "Nota 1: $n1<br>Nota 2: $n2<br>Nota 3: $n3<br>Nota 4: $n4<br>Media: ".
             media(10, 7.6, 10, 7.8);
        ?>
    </div>
    
</body>
</html>