<?php

  include '././dao/dao_usuario.class.php';
  include ('pagina.class.php');

  class TabelaUsuario implements Pagina
  {

    private $tabela = '';

    public function __construct()
    {
      $this->tabela= "<table class='table table-bordered' > ";
      $cab= "<tr align= 'center'> <th> Nome </th> <th> Perfil </th></tr>";

      $this->tabela .= $cab;

      $colunas = array('nome', 'perfil');

      $dao_usuario = new DAOUsuario;

      $arrayUsuario = $dao_usuario->getAll();

      foreach ($arrayUsuario as $usuario)
      {
        $nome = $usuario->getNome();
        $perfil = $usuario->getPerfil()->getNome();
        $this->tabela .= "<tr align= 'center'>";
        $this->tabela .= "<th> {$nome} </th>";
        $this->tabela .= "<th> {$perfil} </th>";
        $this->tabela .= "</tr>";
      }

      $this->tabela .= "</table>";
    }

    public function exibir()
    {
      echo $this->tabela;
    }
  }
?>
