<?php 

$con = mysql_connect("localhost","root","");

if(!$con){
	die("Banco de dados não foi encontrado: " . mysql_error());
	}
mysql_select_db("frame1",$con);

?>