<?php
  class DAOConexao{

    private static $conexao;
    private static $servidor= "localhost";
    private static $database= "db_recurso";
    private static $usuario= "root";
    private static $senha= "root";

    static function getConexao(){

      self::$conexao = mysqli_connect(self::$servidor, self::$usuario, self::$senha);

      if(!self::$conexao){
        die("Não foi possivel estabelecer conexao: ".mysql_error);
      }

      mysqli_select_db(self::$conexao, self::$database);

      return self::$conexao;
    }
  }
?>
