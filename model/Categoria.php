<?php
/**
*
*/
class Categoria
{

  private $id_categoria;
  private $nomeCategoria;

  function __construct()
  {
    // code...
  }
  /**
  * Get the value of Id Categoria
  *
  * @return mixed
  */
  public function getIdCategoria()
  {
    return $this->id_categoria;
  }

  /**
  * Set the value of Id Categoria
  *
  * @param mixed $id_categoria
  *
  * @return self
  */
  public function setIdCategoria($id_categoria)
  {
    $this->id_categoria = $id_categoria;

    return $this;
  }

  /**
  * Get the value of Nome Categoria
  *
  * @return mixed
  */
  public function getNomeCategoria()
  {
    return $this->nomeCategoria;
  }

  /**
  * Set the value of Nome Categoria
  *
  * @param mixed $nomeCategoria
  *
  * @return self
  */
  public function setNomeCategoria($nomeCategoria)
  {
    $this->nomeCategoria = $nomeCategoria;

    return $this;
  }

}



?>
