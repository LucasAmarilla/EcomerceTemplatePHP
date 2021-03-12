<?php
class Endereco{
  private $id;
  private $estado;
  private $cidade;
  private $rua;
  private $numero;
  private $bairro;
  private $cep;
  private $complemento;
  private $referencia;


  function __construct()
  {
    $a = func_get_args();
    $i = func_num_args();
    if (method_exists($this,$f='__construct'.$i)) {
      call_user_func_array(array($this,$f),$a);
    }
  }

  function __construct0()
  {

  }

  function __construct8($rua, $numero, $bairro, $cidade, $estado, $cep, $complemento, $referencia)
  {
    $this->rua = $rua;
    $this->numero = $numero;
    $this->bairro = $bairro;
    $this->cidade = $cidade;
    $this->estado = $estado;
    $this->cep = $cep;
    $this->complemento = $complemento;
    $this->referencia = $referencia;


  }

  public function toArray()
  {
    $enderecoArray = array(
    "rua" => $this->rua,
    "numero" => $this->numero,
    "bairro" => $this->bairro,
    "cidade" => $this->cidade,
    "estado" => $this->estado,
    "cep" => $this->cep,
    "complemento" => $this->complemento,
    "referencia" => $this->referencia


  );
  return $enderecoArray;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setEstado($estado)
  {
    $this->estado = $estado;

    return $this;
  }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }


    /**
     * Get the value of Cep
     *
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of Cep
     *
     * @param mixed $cep
     *
     * @return self
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of Complemento
     *
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set the value of Complemento
     *
     * @param mixed $complemento
     *
     * @return self
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get the value of Referencia
     *
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set the value of Referencia
     *
     * @param mixed $referencia
     *
     * @return self
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

}
?>
