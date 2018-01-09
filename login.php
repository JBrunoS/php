<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login - Loja</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="pdv.php" method="POST">
        <h2 class="form-signin-heading">Por favor, faça o login</h2>
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Senha" required>
      
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="entrar">login</button>
      </form>
    </div> <!-- /container -->
  </body>
</html>
