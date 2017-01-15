<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <div>
    <?php
        $nome = 'null' != $_GET["nome"]?$_GET["nome"]: "Dado Incorreto";
        
    ?>
    <br><br>
    <a href="javascript:history.go(-1)"class="button">Voltar</a>
    </div>
</body>
</html>