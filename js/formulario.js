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

$('#form-register').submit(function(e) {
  e.preventDefault();

  var nome = $('#busca').val();
  var postForm = {
    'nome': nome
  };

  $.ajax({
        type: 'POST', // Usa o método POST
        url: 'ControleUser.php', // Página que será enviada o formulário
        data: postForm, // Conteúdo do envio
        success: function(data) {
          $("#resBusca").html('<b>Resultado da busca</b><br /><br/>'+ data );
        }
      });
});