<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sistema de Cadastro do IFBA</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script>


    function alterar_div() {
      $.ajax({
        type: "POST",
        url: "ControleUser.php",
        data: {
          nome_usuario: $('#seu_nome').val()
        },
        success: function(data) {
          $('#conteudo').html(data);
        }
      });
    }
  </script>
</head>
<body>
  <div class="navbar-fixed">
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="?p=home" class="brand-logo"> IFBA - Eunapolis</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="?p=cadastro_usuario">Cadastrar_Usuario</a></li>
          <li><a href="?p=cadastro_setor">Cadastrar Setor</a></li>
          <li><a href="?p=cadastro_item">Cadastrar_Itens</a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Cadastrar<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="?p=cadastro_usuario">Usuario</a></li>
          <li><a href="?p=cadastro_setor">Setor</a></li>
          <li><a href="?p=cadastro_item">Itens</a></li>
          <li><a href="?p=formulario">Formulario</a></li>
          <li><a href="?p=alter_usuario">Alterar Usuario</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a id="linkAltera" >Navbar Link</a></li>
        </ul>
        <a href="?p=cadastro" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>
  <div class="container">
    <?php include ("secao.php");?>

  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</body>
</html>
