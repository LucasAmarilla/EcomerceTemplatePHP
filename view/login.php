<?php
if (!defined('ROOT_PATH')) {
  define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/ecomerce');
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="stylesheet" href="css_view/master.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<main>
  <div class="login-form">
    <br>
    <br>
    <form action="../controler/userController/login.php" method="post">
      <h2 class="text-center">Log in</h2>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="email" name="user" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="senha" name="pass" required="required">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Log in</button>
      </div>
      <div class="clearfix">
        <center><label class="float-left form-check-label text-center"><input type="checkbox">Lembrar de mim</label></center>
      </div>
    </form>
    <p class="text-center"><a href="#">Criar uma conta</a></p>
    <p class="text-center"><a href="./index.php">Voltar</a></p>
  </div>
</main>
