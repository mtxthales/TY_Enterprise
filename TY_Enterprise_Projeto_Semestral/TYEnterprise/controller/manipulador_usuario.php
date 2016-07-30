<?php

include 'conexao.php';

  class ManipuladorUsuario{

    public static function inserir(Usuario $usuario){

      $conexao = Conexao::getConexao();

      $codigo = $usuario->getCodigo();
      $nome = $usuario->getNome();
      $perfil = $usuario->getPerfil();

      $query = "insert into usuario values($codigo, '$nome', '$perfil');";

      mysqli_query($conexao, $query);
    }
  }
?>
