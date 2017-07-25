<h1>Teste de Views </h1>


<?php 
// $nome eh o valor que esta no $dados['nome'] no home controller
foreach($nome as $info){
    echo "nome = " . $info["id"] . "<br>";
}
