<?php

  class Usuario{

      private $codigo;
      private $nome;
      private $perfil;

      function __construct($codigo){
        $this->codigo = $codigo;
      }

      public function getCodigo(){
        return $this->codigo;
      }

      public function setNome($nome){
        $this->nome = $nome;
      }

      public function getNome(){
        return $this->nome;
      }

      public function setPerfil($perfil){
        $this->perfil = $perfil;
      }

      public function getPerfil(){
        return $this->perfil;
      }
  }
?>
