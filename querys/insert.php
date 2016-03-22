<?php
/**
* 
*/
class ClassName
{
	
	function __construct(argument)
	{
		# code...
	}
}

private $nome = $_POST['nome'];

include("conexao.php");

$sql = "INSERT INTO usuarios VALUES ";
$sql .= "('$nome','$sobrenome', '$matricula','$email','$setor', md5($password) )";
$result = mysql_query($sql)

echo " CADASTRO INSERIDO COM SUCESSO !!!!!!!!!!";

mysql_close($con);

?>
<br /> <br />
<div align="center">
		<a href="lista_cliente.php"> VOLTAR A PÁGINA PRINCIPAL </a> 
</div>