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
            $est = $_GET["est"];
            $rs = "Porto Alegre";
            $sc = "Florianopolis";
            $pr = "Curitiba";
            switch($est) {
                case "Rio Grande do Sul":
                    echo "O estado de $est: <span class='foco'>$rs</span>";
                    break;
                case "Santa Catarina":
                    echo "O estado de $est: <span class='foco'>$sc</span>";
                    break;
                case "Parana":
                    echo "O estado de $est: <span class='foco'>$pr</span>";

            }
          ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="button">Back</a>
    </div>
</body>
</html>