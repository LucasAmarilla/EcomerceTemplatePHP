<?php
require_once 'Singleton.php';
require_once 'CategoriaDAO.php';
require_once ROOT_PATH . '/model/Produto.php';
require_once ROOT_PATH . '/model/Categoria.php';
/**
*
*/
class ProdutoDAO
{
  private $conn;

  function __construct()
  {
    $instance = Singleton::getInstance();
    $this->conn = $instance->getConnect();
  }
  //CRUD

  //CREATE
  public function createproduto($produto, $categoriaId)
  {
    $sql = "INSERT INTO `produto`(nome_produto, preco, descricao, foto_principal, quantidade, marca,categoria_id) VALUES ('{$produto -> getNomeProduto()}' , {$produto -> getPreco()} ,'{$produto -> getDescricao()}', '{$produto -> getFotoPrincipal()}',
    {$produto -> getQuantidade()}, '{$produto -> getMarca()}', {$categoriaId});";

    $this->conn->query($sql);

    return $this->conn->insert_id;
  }

  //UPDATE
  public function updateCategoriaproduto($produtoID, $categoriaID)
  {
    $sql = "UPDATE `produto` SET categoria_id = {$categoriaID} WHERE id_produto = {$produtoID};";

    $this->conn->query($sql);
  }

  //DELETE
  public function deleteProduto($produtoID)
  {
    $sql = "DELETE FROM `produto` WHERE id_produto = {$produtoID};";

    $this->conn->query($sql);
  }

  //READ
  public function readProdutos()
  {
    $sql = "SELECT * FROM `produtos`";
    $produtos = array();

    $results = $this->conn->query($sql);

    if ($results->num_rows > 0) {
      while ($row = $results->fetch_row()) {
        $produto = new Produto();
        $produto->setId($row[0]);
        $produto->setNomeProduto($row[1]);
        $produto->setPreco($row[2]);
        $produto->setDescricao($row[3]);
        $produto->setFotoPrincipal($row[4]);
        $produto->setQuantidade($row[5]);
        $produto->setMarca($row[6]);

        $categoria = CategoriaDAO::getCategoria($row[7], $this->conn);

        $produto->setCategoria($categoria);

        $produtos[] = $produto;
      }
      return $produtos;
    }
  }

  public static function getProduto($produtoID, $conn)
  {
    $produto = new Produto();
    if ($result = $conn->query("SELECT * FROM `produtos` WHERE `id_produto`={$produtoID}")) {
      while($row = $result->fetch_assoc()) {

        $produto->setId($row["id_produto"]);
        $produto->setNomeProduto($row["nome_produto"]);
        $produto->setPreco($row["preco"]);
        $produto->setDescricao($row["descricao"]);
        $produto->setFotoPrincipal($row["foto_principal"]);
        $produto->setQuantidade($row["quantidade"]);
        $produto->setMarca($row["marca"]);
        $categoria = CategoriaDAO::getCategoria($row["CATEGORIA_id"], $conn);

        $produto->setCategoria($row["CATEGORIA_id"], $conn);

        $produto->setCategoria($categoria);
      }
      return $produto;
    }
  }

}
?>
