<?php
require_once 'Categoria.php';

class Produto
{
  private $id;
  private $nome_produto;
  private $preco;
  private $descricao;
  private $foto_principal;
  private $quantidade;
  private $marca;
  private $categoria;
  private $CATEGORIA_id;

  function __construct()
  {


  }

  /**
  * Get the value of Id
  *
  * @return mixed
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Set the value of Id
  *
  * @param mixed $id
  *
  * @return self
  */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
  * Get the value of Nome Produto
  *
  * @return mixed
  */
  public function getNomeProduto()
  {
    return $this->nome_produto;
  }

  /**
  * Set the value of Nome Produto
  *
  * @param mixed $nome_produto
  *
  * @return self
  */
  public function setNomeProduto($nome_produto)
  {
    $this->nome_produto = $nome_produto;

    return $this;
  }

  /**
  * Get the value of Preco
  *
  * @return mixed
  */
  public function getPreco()
  {
    return $this->preco;
  }

  /**
  * Set the value of Preco
  *
  * @param mixed $preco
  *
  * @return self
  */
  public function setPreco($preco)
  {
    $this->preco = $preco;

    return $this;
  }

  /**
  * Get the value of Descricao
  *
  * @return mixed
  */
  public function getDescricao()
  {
    return $this->descricao;
  }

  /**
  * Set the value of Descricao
  *
  * @param mixed $descricao
  *
  * @return self
  */
  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;

    return $this;
  }

  /**
  * Get the value of Foto Principal
  *
  * @return mixed
  */
  public function getFotoPrincipal()
  {
    return $this->foto_principal;
  }

  /**
  * Set the value of Foto Principal
  *
  * @param mixed $foto_principal
  *
  * @return self
  */
  public function setFotoPrincipal($foto_principal)
  {
    $this->foto_principal = $foto_principal;

    return $this;
  }

  /**
  * Get the value of Quantidade
  *
  * @return mixed
  */
  public function getQuantidade()
  {
    return $this->quantidade;
  }

  /**
  * Set the value of Quantidade
  *
  * @param mixed $quantidade
  *
  * @return self
  */
  public function setQuantidade($quantidade)
  {
    $this->quantidade = $quantidade;

    return $this;
  }

  /**
  * Get the value of Marca
  *
  * @return mixed
  */
  public function getMarca()
  {
    return $this->marca;
  }

  /**
  * Set the value of Marca
  *
  * @param mixed $marca
  *
  * @return self
  */
  public function setMarca($marca)
  {
    $this->marca = $marca;

    return $this;
  }

  /**
  * Get the value of Categoria
  *
  * @return mixed
  */
  public function getCategoria()
  {
    return $this->categoria;
  }

  /**
  * Set the value of Categoria
  *
  * @param mixed $categoria
  *
  * @return self
  */
  public function setCategoria($categoria)
  {
    $this->categoria = $categoria;

    return $this;
  }

  /**
  * Get the value of CATEGORIA Id
  *
  * @return mixed
  */
  public function getCATEGORIAId()
  {
    return $this->CATEGORIA_id;
  }

  /**
  * Set the value of CATEGORIA Id
  *
  * @param mixed $CATEGORIA_id
  *
  * @return self
  */
  public function setCATEGORIAId($CATEGORIA_id)
  {
    $this->CATEGORIA_id = $CATEGORIA_id;

    return $this;
  }

}

?>
