<?php
//Aqui importamos todas as classes que poderão ser usadas baseado nas solicitações que forem feitas.
spl_autoload_register(function ($className) {
    // Classe Class...
    if(file_exists("../model/classes/".$className.".php")) {
        require_once "../model/classes/".$className.".php";
    }
    // Classe Connect
    if(file_exists("../model/connect/".$className.".php")) {
        require_once "../model/connect/".$className.".php";
    }
    //Classe View
    if(file_exists("../view/".$className.".php")) {
        require_once "../view/".$className.".php";
    }
    
});
//Armazena na variável $acao o que o sistema esta requisitando (cadastrar, autenticar, excluir, etc)
$action = $_REQUEST["action"];
 
/*Baseado no que foi solicitado, chama na classe DAO o método responsável por tal tarefa, e depois manda pra View a
resposta, para ser exibida de alguma forma ao usuário*/
switch($action){
 
  case 'login':{
 
    // Se for logar, então deverão ser informados login e senha.
    //Primeiro instanciamos um objeto da classe Bean, para setar os valores informados no formulário
    $usuario = new classUsuario();  
 
    /* Agora setamos para a Bean os valores informados,pois serão validados na camada DAO, que 
    irá verificar a consistencia dos dados em um Banco de Dados: MySQL, XML, ou qualquer outra base de 
    dados; e depois retornar para a controller o resultado. */
    $usuario->setLogin($_REQUEST["login"]);
    $usuario->setSenha($_REQUEST["senha"]);
 
    /* Agora vamos instanciar um objeto da classe DAO e um da View, e passaremos para a View o que for retornado
         pela DAO */    
    $usuarioDAO = new Connect();
    $usuarioView = new View();
 
    /**Passaremos para o método de autenticação da DAO um objeto da classe Usuário. 
    Armazenaremos na variável $resultado o que este método retornar. */
    $resultado = $usuarioDAO->autenticaUsuario($usuario);
 
    //Agora chamamos um método da View passando para o mesmo o que foi retornado pela DAO.
    $usuarioView->respostaAutenticacao($resultado);
 
  }
  break;
 
  case 'cadastrar':{
    //Aqui faz as validações necessárias e requisita o método da classe DAO responsável por cadastrar o usuário.
  }
 
  case 'excluir':{
    //Aqui faz as validações necessárias e requisita o método da classe DAO responsável por excluir o usuário.
  }
 
  default:
    return null; //Por padrão, esse switch não retorna nada.
 
}
 
 
?>