<?php
  class Connection{

    private $dsn='';
    private $user= '';
    private $password= '';

    public function __construct(string $arquivo_configuracao)
    {
      if(!$settings = parse_ini_file($arquivo_configuracao)
      {
        throw new Exception("Não foi possível ler o arquivo $arquivo_configuracao", 1);
      }

      $this->dsn = $settings['dsn'];
      $this->user = $settings['user'];
      $this->password = $settings['password'];
    }

    public function getConnection()
    {
      try {

        $con = new PDO($dsn, $user, $password);
        return $con;

      } catch (PDOException $e) {
        echo 'Falha na conexão com o banco de dados: '.$e->getMessage();
      }
    }
  }
?>
