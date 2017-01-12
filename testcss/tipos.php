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
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $media = ($nota1+$nota2)/2;

            if($media < 5) {
                $res = "REPROVADO";
            }else if($media >= 5 || $media < 7) {
                $res = "RECUPERAÇAO";
            }else {
                $res = "APROVADO";
            }

            echo "A media entre $nota1 e $nota2:<br>Situação do Aluno: $res";
            
        ?>
        <br>
        <a href="http://localhost/CursoPHP/curso/tipos.html"><button type="button">Voltar</button></a>
    </div>

    
</body>
</html>