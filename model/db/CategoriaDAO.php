<?php
require_once 'Singleton.php';
require_once ROOT_PATH . '/model/Categoria.php';
/**
*
*/
class categoriaDAO
{
  private $conn;

  function __construct()
  {
    $instance = Singleton::getInstance();
    $this->conn = $instance->getConnect();
  }
  //CRUD
  //CREATE
  public function createCategoria($categoria)
  {
    $sql = "INSERT INTO `categoria`(nomeCategoria) VALUES ('{$categoria -> getNomeCategoria()}');";

    $this->conn->query($sql);

    return $this->conn->insert_id;
  }

  //UPDATE - não é necessário

  //DELETE
  public function deleteCategoria($categoriaID)
  {
    $sql = "DELETE FROM `categoria` WHERE `id_categoria` = {$categoriaID};";

    $this->conn->query($sql);
  }

  //READ
  public static function getCategoria($categoriaID, $conn)
  {
    $categoria = array();
    $categoria = new Categoria();
    $sql = "SELECT * FROM `categoria` WHERE `id_categoria` = {$categoriaID};";

    if ($result = $conn->query($sql)) {
        while($row = $result->fetch_row()) {
          $categoria->setIdCategoria($row[0]);
          $categoria->setNomeCategoria($row[1]);
        }
    }
  }
}
?>
