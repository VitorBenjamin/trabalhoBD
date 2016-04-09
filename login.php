<!DOCTYPE html>
<html lang="pr-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Area Login</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Area De login</h1>
        <div class="row center">
          <h5 class="header col s12 light">Para acessar a area de Formularios entre com EMAIL e SENHA!</h5>
        </div>
        <div class="row center">
          <a id="download-button"  href="#modal1" class="btn-large waves-effect waves-light teal lighten-1 btn modal-trigger">Click Para Fazer Login</a>
          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Area de login</h4>
              <p>Coloque a senha corretamente!</p>
              <form method="POST" action="validar.php" class="col s12">
                <div class="input-field col s6">
                  <input id="email" name="login" type="email" class="validate">
                  <label for="Email">Email</label>
                </div>
                <div class="input-field col s6">
                  <input id="password" name="senha" type="password" class="validate">
                  <label for="senha">Senha</label>
                </div>

              </form>
              <div class="modal-footer">
                <button class="modal-action modal-close waves-effect waves-green btn-flat btn waves-effect waves-light" type="submit" name="action">Cadastrar
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </div>
          <br><br>
        </div>
      </div>
      <div class="parallax"><img src="img/VgPwabX.jpg" height="1938" width="2790" alt="Unsplashed background img 1">
      </div>

    </div>
  </div>


  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Rápido e Versátil</h5>

            <p class="light">Nós fizemos layout pensando em você para fornecer um estilo moderno e simples que incorporam vários componentes personalizados. Além disso, nós criamos animações e transições para proporcionar uma experiência mais suave para os usuários.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Focado nos Usarios</h5>

            <p class="light">Através da utilização de elementos e princípios do Material design, fomos capazes de criar um enquadramento que incorpora componentes e animações que fornecem mais feedback para os usuários. Além disso, um sistema com todas as paginas de forma homogénea permite ao usuário uma experiência mais unificada.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">De Facil Usabilidade</h5>

            <p class="light">Nós fornecemos documentação detalhada, para ajudar novos desenvolvedores a manter o código. Estamos também sempre aberto ao feedback e podemos responder a quaisquer perguntas que um usuário possa ter sobre o sistema.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Se você gostou do layout deste site temos vários templastes esperando por você aqui e muita criatividade para fazer um tamplate com a cara da sua empresa

            Vitor Benjamin(73) 999860272 </p>
          </div>
        </div>

      </div>
    </div>


    <footer class="page-footer teal">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Informaçoes Profissionais</h5>
            <p class="grey-text text-lighten-4">Somos uma equipe de estudantes universitários que trabalham neste projeto como se fosse o nosso trabalho. Projeto que seja apresentado a materia de Banco de Dados e Analise Projeto de Sistemas</p>

          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          Made by <a class="brown-text text-lighten-3">Vitor Benjamin / Anderson</a>
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

  </body>
  </html>