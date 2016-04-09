<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>

  $(function(){

  //PESQUISA INSTANTANEA PELO INPUT
  $("#pesquisa").keyup(function(){
    //Recupera oque está sendo digitado no input de pesquisa
    var pesquisa  = $("#pesquisa").val();
    //Recupera oque foi selecionado
    //var campo     = $("#campo").val();
    //Verifica se foi digitado algo
    if(pesquisa != ''){
      //Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa e na propriedade campo o campo a ser pesquisado
      var dados = {
        palavra : pesquisa
        //campo   : campo
      }
      
      //Envia por AJAX pelo metodo post, a pequisa para o arquivo 'ControleUser.php'
      //O paremetro 'retorna' é responsável por recuperar oque vem do arquivo 'ControleUser.php'
      $.post('ControleUser.php', dados, function(retorna){
        //Mostra dentro da ul com a class 'resultados' oque foi retornado
        $("#resultados").html(retorna);
      });
    }else{
      $("#resultados").html('');
    }
  });

  //PESQUISA INSTANTANEA PELO SELECT
  $("#campo").change(function(){
    //Recupera oque está sendo digitado no input de pesquisa
    var pesquisa = $("#pesquisa").val();

    //Recupera oque foi selecionado

    //Verifica se foi digitado algo
    if(pesquisa != ''){
      //Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa e na propriedade campo o campo a ser pesquisado
      var dados = {
        palavra : pesquisa,
        
      }
      
      //Envia por AJAX pelo metodo post, a pequisa para o arquivo 'ControleUser.php'
      //O paremetro 'retorna' é responsável por recuperar oque vem do arquivo 'ControleUser.php'
      $.post('ControleUser.php', dados, function(retorna){
        //Mostra dentro da ul com a class 'resultados' oque foi retornado
        alert('Informe sua Pequisa!');
        $(".resultados").html(retorna);
        alert('Informe sua Pequisa!');
      });
    }else{
      $(".resultados").html('');
    }
  });

  //PESQUISA DE FORMULÀRIO
  $("#form-pesquisa").submit(function(e){
    //Cancela a ação padrao o formulário, impedindo que ele atualize a página
    e.preventDefault();

    //Recupera oque está sendo digitado no input de pesquisa
    var pesquisa = $("#pesquisa").val();

    //Recupera oque foi selecionado
    var campo = $("#campo").val();

    //Se não for digitado nada, então ele mostra um alert
    if(pesquisa == ''){
      alert('Informe sua Pequisa!');
    }else{
      //Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa
      //Cria um objeto chamado de 'dados' e guarda na propriedade 'palavra' a pesquisa e na propriedade campo o campo a ser pesquisado
      var dados = {
        palavra : pesquisa,
      }

      //Envia por AJAX pelo metodo post, a pequisa para o arquivo 'ControleUser.php'
      //O paremetro 'retorna' é responsável por recuperar oque vem do arquivo 'ControleUser.php'
      $.post('ControleUser.php', dados, function(retorna){
        $("#resultados").html(retorna);
      });
    }
  });
});

</script>
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Alterar Usuarios</h1>
    <div class="row center">
      <h5 class="header col s12 light">Preencha o formulario com os dados solicitados!</h5>
    </div>
    <br><br>

  </div>
</div>
<div class="row center">
  <a id="download-button"  href="#modal1" class="btn-large waves-effect waves-light teal lighten-1 btn modal-trigger">Buscar</a>
  <!-- Modal Structure -->

  <br><br>

</div>


<div class="container">
  <div class="section" id="cadastro_fisico">

    <!--   Icon Section   -->
    <div class="row">
      <div id="conteudo">Este conteúdo será alterado</div>
      Qual é seu nome? <input type="text" id="seu_nome">

      <button type="button" onclick="alterar_div()">Alterar</button>
      <form id="form-pesquisa" method="POST" action="" class="col s12">

        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Digite o Nome do Usuario que Deseja Alterar</h4>
            <p>Apenas peno nome do Usuario</p>
            <div class="input-field col s6">
              <input id="pesquisa" name="buscar" type="search" class="validate">
              <label for="busca">Buscar</label>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <select name="" id="resultados">

                </select>
              </div>
            </div>

            <div class="modal-footer">
              <button class="modal-action modal-close waves-effect waves-green btn-flat btn waves-effect waves-light" type="submit" name="busca_user">Cadastrar
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
        </div>
      </form>
      <form id="" method="POST" action="" class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <select name="" id="resultados">

            </select>
          </div>
        </div>
      </form>
      <div class="row hide" id="resultados" >
       <form method="POST" action="querys/ControleUser.php" class="col s12">
        <div class="row">
         <div class="input-field col s6">
          <input id="nome" name="nome" value="" type="text" class="validate">
          <label for="Nome">Nome</label>
        </div>
        <div class="input-field col s6">
          <input id="sobrenome" name="sobrenome" value="" type="text" class="validate">
          <label for="Sobrenome">Sobrenome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="matricula" name="matricula" value="" type="number" class="validate">
          <label for="Matricula">Matricula</label>
        </div>
        <div class="input-field col s6">
          <input id="email" name="email" value="<" type="email" class="validate">
          <label for="Email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Setores</option>
            <option value=""></option>
          </select>
          <label>Seleciona um Sertor logo Abaixo</label>
        </div>
      </div>


      <button class="btn waves-effect waves-light hide"  id="alterar" type="submit" name="alterar">Cadastrar
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>
</div>
</div>
