<?php

require_once 'conexaoPDO.php';
require_once 'crudUsuarioDao.php';

//header('Location: http://localhost/trabalhoBD2/',true);
/**
*
*/
if($_SERVER['REQUEST_METHOD']=='POST'){
	$nome_usuario = $_POST['nome_usuario'];
 
// Faz o processamento no banco de dados.
// Insere, apaga ou modifica.
// Aqui pode ser feito qualquer processamento,
// não apenas em banco.
 
echo 'Este conteúdo foi alterado por '.$nome_usuario;

	if(isset($_POST['inserir'])){

		insertUsuario();
	}elseif (isset($_POST['inserir_setor'])) {
		inserirSetor();
	}elseif (isset($_POST['palavra'])) {
		//$user = isset($_POST['palavra']);
		//$array = array();
		//$array = getUsuario();
		echo getUsuario();
		//	echo $array;
		//	foreach ($array as $key => $value) {
		//		echo '<option value='.$value[nome].'>Nome Usuario</option>';
		//	}
		}

}
function getUsuario(){
	$data = conexaoPDO::getInstance();
	$crud = crudUsuarioDao::getInstance($data);
	$user = isset($_POST['palavra']);
	$usuario = $crud -> selectUsuario($user);
	return $usuario;
}
function getSetor(){
	$data = conexaoPDO::getInstance();
	$crud = crudUsuarioDao::getInstance($data);
	$setores = $crud -> getSetores();
	return $setores;
}
function inserirSetor(){

	$data = conexaoPDO::getInstance();
	$crud = crudUsuarioDao::getInstance($data);
	$nome = $_POST["nome"];
	$sigla = $_POST["sigla"];
	$email = $_POST["email"];
	$ramal = $_POST["ramal"];
	$chefe = $_POST["chefe"];
	$crud -> insertSetor($nome, $sigla, $email, $ramal, $chefe);
}
function insertIntem(){

	$data = conexaoPDO::getInstance();
	$crud = crudUsuarioDao::getInstance($data);
	$nome = $_POST["nome"];
	$descricao = $_POST["descricao"];
	$unidade = $_POST["unidade"];
	$situacao = $_POST["situacao"];
	$crud -> insertIntem($nome, $descricao, $unidade, $situacao, $chefe);
}
function insertUsuario(){
	$data = conexaoPDO::getInstance();
	$crud = crudUsuarioDao::getInstance($data);
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$matricula = $_POST["matricula"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$crud -> insertUser($nome, $sobrenome, $matricula, $email, $password);
}


function getInformacoes(){
	$nome = isset($_POST["nome"]);
	$sobrenome = isset($_POST["sobrenome"]);
	$matricula = isset($_POST["matricula"]);
	$email = isset($_POST["email"]);
	$senha = isset($_POST["password"]);

}

?>
