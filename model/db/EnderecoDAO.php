<?php
require_once 'Singleton.php';
require_once ROOT_PATH . '/model/Endereco.php';
/**
 *
 */
class EnderecoDAO
{
  private $conn;

  function __construct()
  {
    $instance = Singleton::getInstance();
    $this->conn = $instance->getConnect();
  }
  //CRUD
  //CREATE
  public function createEndereco($endereco)
  {
    $sql = "INSERT INTO `endereco`(rua, numero, bairro, cidade, estado, cep, complemento,referencia)"."VALUES('{$endereco -> getRua()}' , '{$endereco -> getNumero()}',
    '{$endereco -> getBairro()}','{$endereco -> getCidade()}', '{$endereco -> getEstado()}', '{$endereco -> getCep()}', '{$endereco -> getComplemento()}','{$endereco -> getReferencia()}');";

    $this->conn->query($sql);

    return $this->conn->insert_id;
  }

  //UPDATE - não é necessário

  //DELETE
  public function deleteEndereco($enderecoID)
  {
    $sql = "DELETE FROM `endereco` WHERE id_endereco = {$enderecoID};";

    $this->conn->query($sql);
  }

  //READ
  public static function getEndereco($enderecoID, $conn)
  {
    $sql = "SELECT * FROM `endereco` WHERE id_endereco = {$enderecoID};";

    $result = $conn->query($sql);

    $endereco = new endereco();
    if ($result->num_rows == 1) {
      $row = $result->fetch_row();

      $endereco->setId($row[0]);
      $endereco->setRua($row[1]);
      $endereco->setNumero($row[2]);
      $endereco->setBairro($row[3]);
      $endereco->setCidade($row[4]);
      $endereco->setEstado($row[5]);
      $endereco->setCep($row[6]);
      $endereco->setComplemento($row[7]);
      $endereco->setReferencia($row[8]);

    }

    return $endereco;
}
}
?>
