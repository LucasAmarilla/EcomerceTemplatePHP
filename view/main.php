<main class="container-fluid p-0">
  <div class="container">
    <div class="resultados">
      <?php
        include 'components/grid.php';
        require_once ROOT_PATH . '/controler/ProductsController/ProductsController.php';
        $ProductsCtrl = new ProdutoController();
        $listProdutos = $ProductsCtrl->getListProdutos();
        echo generateGrid($listProdutos);
      ?>
    </div>
  </div>
</main>
