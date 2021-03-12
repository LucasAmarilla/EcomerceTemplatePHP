<?php
require_once 'Endereco.php';

/**
*
*/
class Usuario
{
  private $id;
  private $nome;
  private $cpf;
  private $email;
  private $senha;
  private $telefone;
  private $datadenascimento;
  private $enderecoId;
  private $endereco;

  function __construct()
  {
    $this->endereco = new endereco();


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
     * Get the value of Nome
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of Nome
     *
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of Cpf
     *
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of Cpf
     *
     * @param mixed $cpf
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of Senha
     *
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of Senha
     *
     * @param mixed $senha
     *
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of Telefone
     *
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of Telefone
     *
     * @param mixed $telefone
     *
     * @return self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of Datadenascimento
     *
     * @return mixed
     */
    public function getDatadenascimento()
    {
        return $this->datadenascimento;
    }

    /**
     * Set the value of Datadenascimento
     *
     * @param mixed $datadenascimento
     *
     * @return self
     */
    public function setDatadenascimento($datadenascimento)
    {
        $this->datadenascimento = $datadenascimento;

        return $this;
    }

    /**
     * Get the value of Endereco Id
     *
     * @return mixed
     */
    public function getEnderecoId()
    {
        return $this->enderecoId;
    }

    /**
     * Set the value of Endereco Id
     *
     * @param mixed $enderecoId
     *
     * @return self
     */
    public function setEnderecoId($enderecoId)
    {
        $this->enderecoId = $enderecoId;

        return $this;
    }

    /**
     * Get the value of Endereco
     *
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of Endereco
     *
     * @param mixed $endereco
     *
     * @return self
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

}



?>
