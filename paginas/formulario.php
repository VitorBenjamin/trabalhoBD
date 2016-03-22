
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Formulario para Requisiçao</h1>
    <div class="row center">
      <h5 class="header col s12 light">Preecha o formulario com itens que desejam solicitar ao sertor de licitaçoes!</h5>
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
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" length="120"></textarea>
            <label for="textarea1">Descriçao Detalhada</label>
          </div>
        </div>
        <div class="row">
          <p>
            <input name="tipo" type="radio" id="servico" />
            <label for="servico">Serviço</label>
          </p>
          <input name="tipo" type="radio" id="compra" />
          <label for="compra">Compra</label>
        </div>
        <label for="data">Calendario</label>
        <input type="date" class="datepicker">
        <div class="row">
          <div class="input-field col s12">
            <textarea id="justificativa" class="materialize-textarea"></textarea>
            <label for="justificativa">Justificativa</label>
          </div>
        </div>
        <div class="row center">
        <h5 class="header col s12 light">Insira os prodrutos ou serviçoes no seu formulario!</h5>
        </div>
        <div class="row center">
          <a id="download-button"  href="#modal1" class="btn-large waves-effect waves-light teal lighten-1 btn modal-trigger">Novo Intem</a>
          <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Busque os itens Clicando na LUPA</h4>
              <p>Apenas peno nome do produto</p>
              <form method="POST" action="validar.php" class="col s12">
                <div class="input-field col s6">
                  <input id="busca" name="buscar" type="search" class="validate">
                  <label for="busca">Buscar</label>
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

        <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
          <i class="material-icons right">send</i>
        </button>

      </form>
    </div>
  </div>
</div>

