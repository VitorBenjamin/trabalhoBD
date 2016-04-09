<script src="https://code.jquery.com/jquery-2.1.1.min.js">
  $(document).ready(function(){
    $("#cadastro_user").submit(function(){
        window.location.href = "trabalhoBD2/index.php";
        return true;
    })
});
</script>
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Cadastro de Usuarios</h1>
    <div class="row center">
      <h5 class="header col s12 light">Preencha o formulario com os dados solicitados!</h5>
    </div>
    <br><br>

  </div>
</div>


<div class="container">
  <div class="section" id="cadastro_fisico">

    <!--   Icon Section   -->
    <div class="row">
    <form id="cadastro_user" method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>" class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="nome" name="nome" type="text" class="validate"/>
            <label for="Nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input id="sobrenome" name="sobrenome" type="text" class="validate"/>
            <label for="Sobrenome">Sobrenome</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="matricula" name="matricula" type="number" class="validate"/>
            <label for="Matricula">Matricula</label>
          </div>
          <div class="input-field col s6">
            <input id="email" name="email" type="email" class="validate"/>
            <label for="Email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select>
              <option value="" disabled selected>Setores</option>
              <?php
              require_once 'querys/ControleUser.php';
              $var = getSetor();
              foreach ($var as $key => $value) {?>
              <option value="<?php echo "$value[nome]";?>"><?php echo "$value[nome]";?></option>
              <?php }

              ?>

            </select>
            <label>Seleciona um Sertor logo Abaixo</label>
          </div>
          <div class="input-field col s6">
            <input id="password" name="password" type="password" class="validate"/>
            <label for="password">Password</label>
          </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="inserir">Cadastrar
          <i class="material-icons right">send</i>
        </button>

      </form>
    </div>
  </div>
</div>
