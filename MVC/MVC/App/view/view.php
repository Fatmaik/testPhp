<?php

class UsuarioView{

	function respostaAutenticacao($resposta){
	
		/*Se a vari�vel $resposta estiver neste momento como TRUE, ent�o os dados est�o corretos e podemos 
		exibir uma mensagem de sucesso. Caso contr�rio, ir� cair no else, que ir� alertar que os dados s�o inv�lidos.*/
		if($resposta){
			echo '<p class="blue">Login efetuado com sucesso!</p>';
		}
		else{
			echo '<p class="red">Erro ao efetuar o login. Dados incorretos!</p>';
		}
	}

}

?>