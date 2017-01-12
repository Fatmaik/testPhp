<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>aula 4</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery.js"></script>
    <script src="js/javascript.js"></script>
</head>
<body>
    <div class='t'>   
        <?php

            $nota1 = number_format($_GET["nota1"], "1");
            $nota2 = number_format($_GET["nota2"], "1");
            $media = number_format(($nota1+$nota2)/2, "1");
            if($media < 5) {
                $res = "REPROVADO";
                $color = "#f00";
            }else if($media >= 5 && $media < 7) {
                $res = "RECUPERAÇAO";
                $color= "#00f";
            }else if($media >=7) {
                $res = "APROVADO";
                $color ="#33CC00";
            }
            echo "A media entre <span style='color: #FF8B52'>$nota1</span> e
                <span style='color: #FF8B52'> $nota2</span> :<br>Situação do Aluno: <span style='color:$color'>$res</span>";
            
        ?>
        <br>
        <a href="http://localhost/CursoPHP/testPhp/testcss/tipos.html"><button type="button">Voltar</button></a>
</div>

    
</body>
</html

