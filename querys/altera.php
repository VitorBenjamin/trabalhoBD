<?php
 $id = $_GET['id'];
 include("conexao.php");
 $result = mysql_query("SELECT * FROM cadastro WHERE id_cad='$id'");
?>

<form name="form" action="update.php" method="post">

<?php while($row = mysql_fetch_array($result)){ ?>
<input type="text" name="id" value=" <?= $row["id_cad"]; ?>" /><br />
<input type="text" name="nome" value=" <?= $row["nome_cad"]; ?>" /><br />
<input type="text" name="telefone" value="<?= $row["telefone_cad"]; ?>" /><br />
<input type="text" name="endereco" value=" <?= $row["endereco_cad"]; ?>" /><br />
<input type="text" name="cep" value="<?= $row["cep_cad"]; ?>" /><br />

<input type="submit" value="SALVAR" > <br />
<input type="submit" value="VOLTAR" onClick="location.href=lista_cliente.php" >  <br />


<?php } ?>

</form>