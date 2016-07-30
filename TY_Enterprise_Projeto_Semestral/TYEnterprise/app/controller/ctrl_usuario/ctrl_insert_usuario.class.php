<?php

  include '../model/usuario.class.php';
  include '../dao/dao_insert_usuario.class.php';

  class InsertUsuario{

    private $codigo;
    private $nome;
    private $perfil;

    public function insert(string $nome, string $perfil){
      $usuario = new Usuario(0);
      $usuario->setNome($nome);
      $usuario->setPerfil($perfil);

      DAOInsertUsuario::insert($usuario);
    }
  }
?>
