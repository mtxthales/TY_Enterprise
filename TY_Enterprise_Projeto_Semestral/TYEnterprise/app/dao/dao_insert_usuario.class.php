<?php

  include 'conexao.class.php';

  class DAOInsertUsuario{

    public static function insert(Usuario $usuario){

      $codigo = $usuario->getCodigo();
      $nome = $usuario->getNome();
      $perfil = $usuario->getPerfil();

      $conexao = DAOConexao::getConexao();

      $query = "insert into usuario values($codigo, '$nome', '$perfil');";

      mysqli_query($conexao, $query);
    }
  }
?>
