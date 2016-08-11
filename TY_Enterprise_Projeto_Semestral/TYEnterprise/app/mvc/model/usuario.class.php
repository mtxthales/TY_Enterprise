<?php

  class Usuario{

    private string $nome;
    private int $perfil;

    public function setNome(string $nome){
      $this->nome = $nome;
    }

    public function getNome(){
      return $this->nome;
    }

    public function setPerfil(int $perfil){
      $this->perfil = $perfil;
    }

    public function getPerfil(){
      return $this->perfil;
    }
  }
?>
