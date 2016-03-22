<?php
	if(strlen($_GET['p'])>0){

		if (file_exists('paginas/'.$_GET['p'].'.php')){
			include('paginas/'.$_GET['p'].'.php');
	}else{
		switch($_GET['p']){

			default:
		}
	}

}else{
	include('paginas/cadastro_usuario.php');
}

?>