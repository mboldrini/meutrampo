<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Login - Meu Trampo</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="<?= base_url() ?>login/logar">

        <h5 class="form-signin-heading">Acesso Restrito (Somente para Empresas)</h5>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Seu Email" required="" autofocus="" name="email">

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="senha" class="form-control" placeholder="Senha" required="" name="senha">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

      </form>

    </div> <!-- /container -->


  

</body></html>