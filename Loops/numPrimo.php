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
            $num = isset($_GET["num"])?$_GET["num"]:"Entrava Vazia";
            echo "Analizando o Numero $num ...<br>";
            echo $valores = "Valores Multiplos: ";
           
            // contador de multiplos
            $contador = 0;

            for($n = 1; $n <= 10; $n++) {
                // armazena inicialmente todos os multiplos
                $inteiros = $num/$n;
                if($inteiros == intval($inteiros)) {
                    $contador++;
                    // depois do if $inteiros imprime somente multiplos inteiros.
                    echo "$inteiros ";
                }
                if($contador <= 2){
                    $resultado = "Resultado de $num: <span class='foco'>$num È PRIMO</span>";
                }else if($contador > 2) {
                    $resultado = "Resultado de $num: <span class='foco'>$num NÃO É PRIMO</span>";
                }
            }
            echo "<br>Total de Multiplis: $contador<br>";
            echo $resultado;
        ?>

<br><br>
    <a href="javascript:history.go(-1)"class="button">Voltar</a>
    </div>
</body>
</html>