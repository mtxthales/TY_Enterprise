<?php

  include 'conexao.class.php';

  class DAOSelectUsuario{

    public static function select($columns, $id){

      $conexao = DAOConexao::getConexao();
      $query = "select ";

      foreach ($columns as $name) {
        $query .= " $name,";
      }

      $query = rtrim($query, ",");

      $query.= " from usuario";

      if($id > 0){
        $query .= " WHERE codigo= $id";
      }

      $result = mysqli_query($conexao, $query);

      return $result;
    }
  }
?>
