<?php
  class Conexao{

    private static $conexao;
    private static $servidor= "localhost";
    private static $database= "db_semestral";
    private static $usuario= "root";
    private static $senha= "123";

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
