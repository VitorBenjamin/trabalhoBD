
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Cadastro de Setores</h1>
    <div class="row center">
      <h5 class="header col s12 light">Preencha o formulário com os dados solicitados!</h5>
    </div>
    <br><br>

  </div>
</div>


<div class="container">
  <div class="section" id="cadastro_fisico">

    <!--   Icon Section   -->
    <div class="row">
      <form method="POST" action="querys/ControleUser.php" class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="nome" name="nome" type="text" class="validate">
            <label for="Nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input id="sigla" name="sigla" type="text" class="validate">
            <label for="sigla">Sigla</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="ramal" name="ramal" type="number" class="validate">
            <label for="Ramal">Ramal</label>
          </div>
          <div class="input-field col s6">
            <input id="email" name="email" type="email" class="validate">
            <label for="Email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select class="browser-default" name="chefe">
              <option value="" selected>Seleciona o Chefe Do setor</option>
              <option value="teste ">Option 1</option>
              <option value="bora ver">Option 2</option>
              <option value="caralho">Option 3</option>
            </select>
          </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="inserir_setor">Cadastrar Setor
          <i class="material-icons right">send</i>
        </button>

      </form>
    </div>
  </div>
</div>

