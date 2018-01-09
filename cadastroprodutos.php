<!DOCTYPE html>
<!-- saved from url=(0039)http://getbootstrap.com/examples/theme/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Aula3</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Adicionando os links do modal-->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <!-- Custom styles for this template -->
    <link href="./css/theme.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="">

                    <legend class="text-center">Registro de Produtos</legend>

                    <fieldset>
                        <legend>Dados Gerais</legend>

                        <div class="form-group col-md-3">
                            <label for="cod">Código item</label>
                            <input type="text" class="form-control" name="cod" id="cod" placeholder="Código item" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="descricao">Descrição</label>
                            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="valor">Valor</label>
                            <input type="text" class="form-control" name="valor" id="valor" placeholder="R$ 0,00" required>
                        </div>

                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-3">
                            <button type="submit" name="enviar" class="btn btn-primary">
                                Salvar
                            </button>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn" onclick="limpaformulario();">
                                Limpar
                            </button>
                        </div>
                        <div class="col-md-3">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
                                Listar
                            </button>
                        </div>
                        <div class="col-md-3">
                            <a href="index.php"><button type="button" name="enviar" class="btn btn-primary"> Voltar
                            </button></a>
                               
                        </div>
                    </div>
                </form>
            </div>
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
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        function limpaformulario(){
            $("#cod").val("");
            $("#descricao").val("");
            $("#valor").val("");

        }
    </script>



<?php
include 'conexao.php';
    
try {

    //$conn = new PDO("mysql:host=localhost;dbname=database", $username, $password);

                if (isset($_POST['enviar'])){

                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO produtos (codigo, descricao, valor)
                    VALUES ('$_POST[cod]', '$_POST[descricao]', '$_POST[valor]')";
                    // use exec() because no results are returned
                    $conn->exec($sql);

                    echo "<script type='text/javaScript'>alert('Gravado com sucesso!')</script>";
                    echo "<script> location.href='index.php'; </script>";
                }
                else{
                    //echo "Não pode gravar no banco";
                }
    } 
catch (PDOException $e) 
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    
    $conn = null;

?>

</html>