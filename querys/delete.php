<?php 
	$id = $_GET['id'];
	include("conexao.php");
	$result = msyql_query("SELECT * FROM cadastro WHERE id_cad='$id'");

?>
Dados do Cliente <br />
<?php while($row = mysql_fetch_array($result)){ ?>

    Nome: <?= $row["nome_cad"]; ?> <br/>
    Telefone: <?= $row["telefone_cad"]; ?> <br/>
    Endereço: <?= $row["endereco_cad"]; ?> <br/>
    Cep: <?= $row["cep_cad"]; ?> <br/>
    
<?php } ?>
<br/><br/>
<form name="form" action="deletar.php" method="post">

<input type="text" value="<?= $id ?>" name="id" /> 

<br/><br/>
Verifique os dados e click no botão deletar para excluir o Cliente do Banco de Dados!

<br/><br/>

<input type="submit" name="envia" value=" DELETAR" > <br />


</form>

