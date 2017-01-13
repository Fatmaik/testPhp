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
            $num = "null" != $_GET["num"]? $_GET["num"]:1;
            $esc = "null" != $_GET["esc"]? $_GET["esc"]:1;

            $doble = $num * 2;
            $cubo = $num ^ 3;
            $sqrt = sqrt($num);


            switch($esc) {
                case 1:
                    $r = "$num ao dobro e: <span class='foco'>$doble</span>";
                    break;
                case 2:
                    $r = "$num ao cubo e: <span class='foco'>$cubo</span>";
                    break;
                case 3:
                    $r = "A raiz quadrada de <span class='foco'>$num</span> e: <span class='foco'>$sqrt</span>";
            }
            echo "O numero e: <span class='foco'>$num</span><br>";
            
            echo $r;

        ?>
        <br>
        <a href="http://localhost/CursoPHP/Switch/swhich.html"><button class="button" type="button">Voltar</button></a>
    </div>
</body>
</html>