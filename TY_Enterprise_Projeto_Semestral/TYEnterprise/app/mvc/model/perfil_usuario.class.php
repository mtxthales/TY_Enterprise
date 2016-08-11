<?php

  class PerfilUsuario{

    private $codigo;
    private $nome;

    public function setCodigo(int $codigo)
    {
      $this->codigo = $codigo;
    }

    public function getCodigo()
    {
      return $this->codigo;
    }

    public function setNome(string $nome)
    {
      $this->nome = $nome;
    }

    public function getNome()
    {
      return $this->nome;
    }
  }
?>
