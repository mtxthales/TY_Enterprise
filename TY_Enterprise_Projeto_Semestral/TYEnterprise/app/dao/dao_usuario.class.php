<?php

  include 'conexao.class.php';

  class DAOUsuario{

    public static function insert(Usuario $usuario){

      private $nome = $usuario->getNome();
      private $perfil = $usuario->getPerfil();

      $conector = new Connection("");
      $conexao = $conector->getConnection();

      $query = "insert into usuario values('$nome', '$perfil');";

      $conexao->exec($query);
    }

    public static function select(string $nome){

      $conexao = DAOConexao::getConexao();

      $query = "select * from usuario where ";

      $result = mysqli_query($conexao, $query);

      return $result;
    }

    public function selectAll()
    {
      $array = array();

      return $array;
    }
  }
?>
