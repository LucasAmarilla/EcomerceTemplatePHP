<?php
if (!defined('ROOT_PATH')) {
  define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/ecomerce');
}
require_once ROOT_PATH . '/model/Produto.php';
require_once ROOT_PATH . '/model/Categoria.php';
require_once ROOT_PATH . '/controler/productsController/ProductsController.php';
require_once ROOT_PATH . '/model/db/CategoriaDAO.php';
require_once ROOT_PATH . '/model/db/ProdutoDAO.php';
require_once ROOT_PATH . '/model/db/Singleton.php';


$id = $_GET['id'];

$productCtrl = new ProdutoController();
$produto = $productCtrl->getProduto($id);

$instance = Singleton::getInstance();
$conn = $instance->getConnect();
?>
<br>
<br>
<br>
<main class="container">
  <div class="topodetails">
    <h2><?php echo $produto->getNomeProduto()  ?></h2>
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
            $marca = $produto->getMarca();
            $preco = $produto->getPreco();
            $qnt = $produto->getQuantidade();

            ?>

            <h2 class="card-text"><?php echo "Preço: R$ ". $preco; ?></h2>
            <p class="card-text"><?php echo "Marca: ". $marca; ?></p>
            <p class="card-text"><?php echo "Quantidade disponivel: ". $qnt; ?></p>


          </div>

          <div class="card-footer">
            <button class="btn btn-warning my-2 my-sm-0" type="button" name="Comprar">Comprar</button>
            <br>
            <br>
            <button class="btn btn-danger my-2 my-sm-0" type="button" name="Adicionar a lista de desejos">Adicionar a lista de desejos</button>

          </div>

        </div>
      </div>
    </div>

    <div class="basedetails jumbotron jumbotron-fluid">
      <div class="descricao">
        <h5>Descrição: </h5>
        <p><?php echo $produto->getDescricao(); ?></p>
      </div>
    </div>

  </div>
</div>
</main>
