<!DOCTYPE html>
<!-- saved from url=(0039)http://getbootstrap.com/examples/theme/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Cadastro de Clientes</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=".../css/theme.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

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
                <form role="form" method="POST" action="form.php">

                    <legend class="text-center">Registro de Clientes</legend>

                    <fieldset>
                        <legend>Dados Gerais</legend>

                        <div class="form-group col-md-8">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="idade">Idade</label>
                            <input type="text" class="form-control" name="idade" id="idade" placeholder="Idade" required>
                        </div>

                    </fieldset>

                     <fieldset>
                        <legend>Contatos</legend>

                        <div class="form-group col-md-8">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" name="celular" id="celular" required>
                        </div>

                    </fieldset>

                    <fieldset>
                        <legend>Segurança</legend>
                         <div class="form-group col-md-6">
                            <label for="senha">Senha</label>
                            <label for="senha">A senha deve conter 8 a 16 dígitos</label>
                            <input type="password" class="form-control" name="senha" id="senha" required>
                        </div>

                         <div class="form-group col-md-6">
                            <label for="confirmasenha">Confirma Senha</label>
                            <input type="password" class="form-control" name="confirmasenha" id="confirmasenha" required>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-4">
                            <button type="submit" name="enviar" class="btn btn-primary">
                                Salvar
                            </button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn" onclick="limpaformulario();">
                                Limpar
                            </button>
                        </div>
                        <div class="col-md-4">
                            <a href="index.php"><button type="button" name="enviar" class="btn btn-primary"> Voltar
                            </button></a>
                               
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    /*
    $nome = $_POST['nome'];
    $data_nas = $_POST['dt_nascimento'];
    $rg = $_POST['rg'];
    $cep = $_POST['cep'];

    echo $nome."<br/>";
    echo $data_nas."<br/>";
    echo $rg."<br/>";
    echo $cep."<br/>";

*/
    ?>
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

    <!--
<script type="text/javascript">
$(function(){
    $.post("relacaoprodutos.php", function(data){
        alert("Data: " + data);
  });

});


  
</script>
-->

    <script type="text/javascript">
        $(function () {
            //$('#datetimepicker1').datetimepicker();
            $("#celular").mask("(99) 99999-9999");
            $("dt_nascimento").mask("9999-99-99");
            $("#telefone").mask("(99) 9999-9999");
            $("#cpf").mask("999.999.999-99");
            $("#cep").mask("99999-999");
        });
    </script>

    <?php
include 'conexao.php';

if (isset($_POST['enviar'])) {
    
    //Registro  dos dados

    
    //Validação dos dado



    //Inserção no banco de dados e redirecionamento

        
            $sql_code = "INSERT INTO clientes (
                        nome, 
                        idade,            
                        email,
                        telefone) 
                        VALUES (
                        '$_POST[nome]',
                        '$_POST[idade]',
                        '$_POST[email]',
                        '$_POST[celular]'
                        )";

        $confirma = $mysqli->query($sql_code) or die($mysqli->error);
        echo "<script text='javascritp'>alert('Salvo com sucesso no banco de dados!')</script>";
        echo "<script text='javascritp'>alert('Por favor, faça login!')</script>";

            if ($confirma) {
                unset(
                $_POST['nome'],
                $_POST['idade'],
                $_POST['email'],
                $_POST['celular']
                );
                echo "<script> location.href='login.php'; </script>";
            }
            else
                echo "<script text='javascript'> alert('Não foi possivel salvar no banco')</scritp>";
    }




?>

  </html>