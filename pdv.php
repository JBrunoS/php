<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Estacio :: PDV</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="custom.css" />
  <!-- Adicionando links para o modal-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">

    <div class="header clearfix">
        <h3 class="text-muted">Estácio :: PDV</h3>
    </div>

    <form class="form-inline">
      <div class="form-group">
        <label for="cliente">Cliente</label>
        
      <?php
      include 'consultarclientes.php';
      //echo $nome;
      ?>
      </div>

      <div class="form-inline">
      <!--<button type="submit" class="btn btn-default" name="sair">Sair</button>-->
      </div>

    </form>

    <div id="mapa"></div>

    </form>
    <hr>
      <form class="form-inline" method="" action="">
      <div class="form-group">
      <label for="produto" class="sr-only">Código produto</label>
        <input type="text" id="codigo" name="codigo" placeholder="Código" class="form-control" value=""></input>
      </div>
  
      <div class="form-group">
      <label for="descricao" class="sr-only">Descrição do Produto</label>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição" disabled class="form-control" value=""></input>
      </div>
      
      <div class="form-group">
      <label for="valor" class="sr-only">Valor</label>
          <input type="text" name="valor" id="valor" placeholder="Valor" class="form-control" disabled value="" ></input>
      </div>

      <div class="form-group">
      <label for="quantidade" class="sr-only">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade" class="form-control" />
      </div>              

      <div class="form-group">
        <label for="cliente"></label>
      </div>

      <div class="form-group">
        <button type="button" name="enviar" id="enviar" class="btn btn-primary">Adicionar no Pedido</button>
      </div>

      <div class="form-group">
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
          Listar
        </button>
      </div>

      <?php
        include 'solicitar.php';
      ?>

    </form>
    <hr>
      <div class="table">
        <table class=" table table-condensed" id="tableA">
        <thead class="thead">
        <tr>
          <th>Código</th>
          <th>Descrição</th>
          <th>Valor</th>
          <th>Quantidade</th>
        </tr>
        </thead>
        <tbody class="tbody" name="tbody" id="tbody">
        </tbody>
        <tfoot>
        <tr>
        <th></th>
        <th></th>
          <th>Valor Total</th>
          <th>Total de itens</th>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th id="valortotal"></th>
          <th id="totalitens"></th>
        </tr>
        </tfoot>
        </table>
        <span id="span"></span>
      </div>

      <div class="form-group">
        <input type="button" class="button btn btn-primary" name="calcular" id="calcular" value="Finalizar Nota">
      </div>
    </div>

  <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lista dos produtos</h4>
        </div>
        <div class="modal-body">
          <p><?php 
          include 'consultarprodutos.php';  
          ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    var totalitens = 0;
    var valortotal = 0;
    var totalcompra = 0;

  $(function(){
    $("#codigo").focusout(function(){
    var codigo = $("#codigo").val();

    if (codigo != "") {
      $.post( "solicitar.php", {codigo: codigo}).done(function( data ) {
        var x = JSON.parse(data);
        
        $("#descricao").val(x.descricao);
        $("#valor").val(x.valor);
      
      });

    }
  });

    var idtr= 0;
    var array = [idtr];


  $("#enviar").click(function(){
    var codigo = $("#codigo").val();
    var descricao = $("#descricao").val();
    var valor = new Number($("#valor").val());
    var qtd = new Number($("#quantidade").val());

    array = {
       idtr : [codigo, descricao, valor, qtd]

    }
    idtr ++;
    console.log(array);


      if (codigo != "" && descricao != "" && valor != "" && qtd != "") {
        
        $("#tableA tbody").append(
          "<tr id=idtr>"+
          "<td id='idcodigo' name='idcodigo'>" + codigo + "</td>" +
          "<td id='iddescricao' name='iddescricao'>" + descricao + "</td>" +
          "<td id='idvalor' name='idvalor'>" + valor + "</td>" +
          "<td id='idqtd' name='idqtd'>" + qtd + "</td>"+
          "</tr>"
        );
        idtr ++;
        console.log(idtr);
    
    totalitens = qtd + totalitens;
    valortotal = qtd * valor;
    totalcompra = totalcompra + valortotal;
    
        $("#calcular").click(function(){

          $('#tableA #tbody #idtr').each(function(index,td){
            var idcodigo = $(td).find('#idcodigo');
            var iddescricao = $(td).find('#iddescricao');
            var idvalor = $(td).find('#idvalor');
            var idqtd = $(td).find('#idqtd');
          });

            $(idcodigo).each(function(index, td){
              idcodigo = $(td).text();
              console.log(idcodigo);
            });
            

            $(iddescricao).each(function(index,td){
                  iddescricao = ($(td).text());
                  console.log(iddescricao);
            });

            $(idvalor).each(function(index,td){
                  idvalor = ($(td).text());
                  console.log(idvalor);
            });

            $(idqtd).each(function(index,td){
                  idqtd = ($(td).text());
                  console.log(idqtd);
            });
        });

        

        $("#totalitens").html(totalitens);
        $("#valortotal").html(totalcompra.toFixed(2));
        $("#codigo").val("");
        $("#descricao").val("");
        $("#valor").val("");
        $("#quantidade").val("");

    }else{

      alert("Você precisa preencher todos os campos!");
    }

  });
});
</script>

</html>
