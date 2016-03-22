<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php

include("conexao.php");
$result = mysql_query("SELECT * FROM cadastro");

?>

<table width="900" border="1">
  <tr>
    <th scope="col">&nbsp; Código</th>
    <th scope="col">&nbsp; Nome</th>
    <th scope="col">&nbsp; Telefone</th>
    <th scope="col">&nbsp; Endereço</th>
    <th scope="col">&nbsp; Cep</th>
    <th scope="col">&nbsp; Ação</th>
  </tr>
  <?php while($row=mysql_fetch_array($result)){ ?>
  <tr>
    <td>&nbsp; <?= $row["id_cad"]; ?></td>
    <td>&nbsp; <?= $row["nome_cad"]; ?></td>
    <td>&nbsp; <?= $row["telefone_cad"]; ?></td>
    <td>&nbsp; <?= $row["endereco_cad"]; ?></td>
    <td>&nbsp; <?= $row["cep_cad"]; ?></td>
    <td>&nbsp; 
    	<a href="altera.php?id= <?= $row["id_cad"]; ?>"> <div >Alterar </div> </a>
        <a href="delete.php?id= <?= $row["id_cad"]; ?>"> <div > Deletar </div> </a>        
    	
    </td>
  </tr>
  <?php } ?>
</table>
<br /> <br /> <br /> 
<div align="center">
<a href="inserir.php"> INSERIR NOVO CADASTRO </a> 
</div>	
</body>
</html>