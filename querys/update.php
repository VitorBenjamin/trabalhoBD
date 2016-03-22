<?php 
$id = $_POST['id'];

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];

include("conexao.php");
 
$result = mysql_query("UPDATE cadastro SET nome_cad='$nome',  telefone_cad='$telefone', endereco_cad='$endereco', cep_cad='$cep' WHERE id_cad='$id'");
echo " CADASTRO ALTERADO COM SUCESSO !!!!!!!!!!";

mysql_close($con);
 
?>
<br /> <br />
<a href="lista_cliente.php"> VOLTAR A PÁGINA PRINCIPAL </a> 
