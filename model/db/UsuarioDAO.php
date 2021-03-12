<?php
require_once 'Singleton.php';
require_once 'EnderecoDAO.php';
require_once ROOT_PATH . '/model/Usuario.php';
require_once ROOT_PATH . '/model/Endereco.php';
/**
 *
 */
class UsuarioDAO
{
  private $conn;

  function __construct()
  {
    $instance = Singleton::getInstance();
    $this->conn = $instance->getConnect();
  }
  //CRUD

  //CREATE
  public function createUsuario($usuario, $enderecoId)
  {
    $sql = "INSERT INTO `usuario`(nome, cpf, email, senha, telefone, datadenascimento,ENDERECO_id) VALUES('{$usuario -> getNome()}' , {$usuario -> getCpf()} ,'{$usuario -> getEmail()}', '{$usuario -> getSenha()}',
    '{$usuario -> getTelefone()}', '{$usuario -> getDatadenascimento()}', {$enderecoId});";

    $this->conn->query($sql);

    return $this->conn->insert_id;
  }

  //UPDATE
  public function updateEnderecoUsuario($usuarioID, $enderecoID)
  {
    $sql = "UPDATE `usuario` SET endereco_id = {$enderecoID} WHERE id_usuario = {$usuarioID};";

    $this->conn->query($sql);
  }

  //DELETE
  public function deleteUsuario($usuarioID)
  {
    $sql = "DELETE FROM `usuario` WHERE id_usuario = {$usuarioID};";

    $this->conn->query($sql);
  }

  //READ
  public function readUsuarios()
  {
    $sql = "SELECT * FROM `usuario`;";
    $usuarios = array();

    $results = $this->conn->query($sql);

    if ($results->num_rows > 0) {
      while ($row = $results->fetch_assoc()) {
        $usuario = new Usuario();

        $usuario->setId($row['id_usuario']);
        $usuario->setNome($row['nome']);
        $usuario->setEmail($row['email']);
        $usuario->setTelefone($row['telefone']);
        $usuario->setDatadenascimento($row['datadenascimento']);
        $usuario->setCpf($row['cpf']);

        $endereco = enderecoDAO::getendereco($row['endereco_id'], $this->conn);

        $usuario->setendereco($endereco);

        $usuarios[] = $usuario;
      }
      return $usuarios;
    }
  }

  public static function getUsuario($usuarioID, $conn)
  {
    $sql = "SELECT * FROM `usuario` WHERE id_usuario = {$usuarioID};";

    $result = $conn->query($sql);

    $usuario = new Usuario();
    if ($result->num_rows == 1) {
      $row = $result->fetch_row();

        $usuario->setId($row[0]);
        $usuario->setNome($row[1]);
        $usuario->setEmail($row[2]);
        $usuario->setTelefone($row[3]);
        $usuario->setUserAdmin($row[4]);
        $usuario->setCpf($row[5]);
        $usuario->setenderecoId($row[6]);
  }
  return $usuario;
}

  public function getLogin($email)
  {

    $result = $this->conn->query("SELECT * FROM usuario WHERE email=('$email')");

    $usuario = null;

    if ($result->num_rows >= 1) {
      $row = $result->fetch_row();
        $usuario = new Usuario();
        $usuario->setId($row[0]);
        $usuario->setNome($row[1]);
        $usuario->setCpf($row[2]);
        $usuario->setEmail($row[3]);
        $usuario->setSenha($row[4]);
        $usuario->setTelefone($row[5]);
        $usuario->setDatadenascimento($row[6]);
        $usuario->setenderecoId($row[7]);
  }
  return $usuario;
}
}
?>
