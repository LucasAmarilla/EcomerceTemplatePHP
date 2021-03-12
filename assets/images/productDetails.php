<?php
require_once './model/Produto.php';
require_once './model/Categoria.php';
require_once ROOT_PATH . '/controller/productController/ProductsController.php';
$id = $_GET['id']; //Mandar para o controller e pedir as informações

  $productCtrl = new ProductsController();
  $produto = $productCtrl->getProduto($id);
?>

<main class="container">
  <div class="topodetails">
    <h3><?php echo $produto->getNome()  ?></h3>
  </div>

  <div class="centraldetails">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <?php
        $foto = $produto->getFotoPrincipal();
        echo "<img src='{$foto}' class='img-fluid' alt='Foto do bixoo'>";
        ?>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Dados Gerais</h5>

            <?php
              $cat = $produto->getCategoria()->getNomeCategoria();
              $preco = $produto->getPreco();
            ?>

            <p class="card-text"><?php echo $cat; ?></p>
            <p class="card-text"><?php echo $preco; ?></p>
            </div>

            <div class="card-footer">
              <button class="btn btn-warning text-white" type="button" name="botão">Comprar</button>
            </div>

          </div>
        </div>
      </div>

      <div class="basedetails jumbotron jumbotron-fluid">
        <div class="descricao">
          <h5>Descrição:></h5>
          <p><?php echo $produto->getDescricao(); ?></p>
        </div>
      </div>

    </div>
  </div>
</main>
