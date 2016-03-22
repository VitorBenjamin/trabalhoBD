<?php 
	
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$matricula = $_POST["matricula"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	require_once('connection.php');

	$conn = Connection::getConexao();
	$stmt = $conn->prepare('INSERT INTO usuario(nome, sobrenome, matricula, email, senha) 
		VALUES(:nome, :sobrenome, :matricula, :email, :password)');
	$stmt->execute(array( 
		':nome' => $nome,
		':sobrenome' => $sobrenome,
		':matricula'=> $matricula,
		':email'=> $email,
		':password'=> $password
		));
	echo $stmt->rowCount(); 
	
?>
		
