<?php

    class Connector{

    private static $arquivo_configuracao = './.config/mysql_setting.ini';
    private static $instance;

    public static function getInstance()
    {
      if(!isset(self::$instance))
      {
        if(!$settings = parse_ini_file(self::$arquivo_configuracao))
        {
          throw new Exception("Não foi possível ler o arquivo $arquivo_configuracao", 1);
        }

        $dsn = $settings['dsn'];
        $user = $settings['user'];
        $password = $settings['password'];

        self::$instance = new PDO($dsn, $user, $password);
      }

      return self::$instance;
    }
  }
?>
