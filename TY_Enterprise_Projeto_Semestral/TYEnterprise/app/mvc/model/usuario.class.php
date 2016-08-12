<?php

  //include 'perfil_usuario.class.php';

  class Usuario{

    private $nome;
    private $perfil;

    public function setNome($nome){
      $this->nome = $nome;
    }

    public function getNome(){
      return $this->nome;
    }

    public function setPerfil(PerfilUsuario $perfil){
      $this->perfil = $perfil;
    }

    public function getPerfil(){
      return $this->perfil;
    }
  }
?>
