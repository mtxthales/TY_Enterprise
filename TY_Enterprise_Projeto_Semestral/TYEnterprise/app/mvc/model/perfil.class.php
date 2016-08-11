<?php

  class PerfilUsuario{

    int $codigo;
    string $perfil;

    public function setCodigo(int $codigo)
    {
      $this->codigo = $codigo;
    }

    public function getCodigo()
    {
      return $this->codigo;
    }

    public function setPerfil(string $perfil)
    {
      $this->perfil = $perfil;
    }

    public function getPerfil()
    {
      return $this->perfil;
    }
  }
?>
