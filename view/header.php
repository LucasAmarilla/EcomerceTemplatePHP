<header class="navbar shadow-sm p-3 fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./index.php"><img src="./assets/images/alto.png" alt="" height="50px" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Peças
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Processadores</a>
            <a class="dropdown-item" href="#">Placas de video</a>
            <a class="dropdown-item" href="#">Placas mãe</a>
            <a class="dropdown-item" href="#">Memorias RAM</a>
            <a class="dropdown-item" href="#">Fonte</a>
            <a class="dropdown-item" href="#">Armazenamento</a>
            <a class="dropdown-item" href="#">Acessorios</a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Algo especifico?</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Montar meu pc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosso forum</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" action="view/login.php">
        <?php
        if (!isset($_SESSION['user'])) {
          echo "<a href='/ecomerce?page=cadastro' class='btn btn-warning my-2 my-sm-0 mr-2 text-white' type='submit'>Cadastro</a>";
          echo "<a href='/ecomerce?page=login' ".
          "class='btn btn-primary my-2 my-sm-0' type='submit'>Login</a>";
        }else{
          echo "<a href='/ecomerce?page=' ".
          "class='btn btn-primary my-2 my-sm-0 mr-2' type='submit'>Meu carrinho</a>";
          echo "<a href='controler/userController/logout.php' class='btn btn-danger my-2 my-sm-0' type='submit'>Logout</a>";
        }
        ?>
      </form>
    </div>
  </div>
</header>
