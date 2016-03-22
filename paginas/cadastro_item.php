<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Cadastro de Produtos</h1>
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
      <form method="POST" action="cadatrar_banco.php" class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="nome" type="text" class="validate">
            <label for="Nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input id="matricula" type="number" class="validate">
            <label for="Unidade">Unidade</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="Descriçao Detalhada">Descriçao Detalhada</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select class="browser-default" >
            <option value="" selected>Seleciona uma Classificaçao</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
          <i class="material-icons right">send</i>
        </button>

      </form>
    </div>
  </div>
</div>

