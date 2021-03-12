<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>iFTech</title>
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

</head>
<body>
  <?php
  session_start();

  include 'model/db/Singleton.php';

  $instance = Singleton::getInstance();
  $connect = $instance->getConnect();

  include 'view/header.php';
  if (!isset($_GET['page'])) {
    include 'view/carrosel.php';
    include 'view/main.php';
  }else if ($_GET['page'] == 'login') {
    include 'view/login.php';
  }else if ($_GET['page'] == 'cadastro') {
    include 'view/cadastro.php';
  }else if ($_GET['page'] == 'details') {
    include 'view/ProductDetails.php';
  }else{
    include 'view/carrosel';
    include 'view/main.php';
  }
  include 'view/footer.php';

  ?>
</body>
</html>
