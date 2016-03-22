<?php 
	$id = $_POST['id'];
	
	
	include("conexao.php");
 
$result = mysql_query("DELETE FROM cadastro WHERE id_cad='$id'");
echo " CADASTRO EXCLUÍDO COM SUCESSO !!!!!!!!!!";

mysql_close($con);
 
?>
<br /> <br />
<a href="lista_cliente.php"> VOLTAR A PÁGINA PRINCIPAL </a> 	