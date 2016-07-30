<?php

  include '././dao/dao_select_usuario.class.php';

  class TabelaUsuario
  {

    private $tabela = '';

    public function __construct()
    {
      $this->tabela= "<table align= 'center' width= '80%' border='1' > ";
      $cab= "<tr align= 'center'> <th> Codigo </th> <th> Nome </th> <th> Perfil </th></tr>";

      $this->tabela .= $cab;

      $colunas = array('codigo', 'nome', 'perfil');

      $result = DAOSelectUsuario::select($colunas, 0);

      while($row = mysqli_fetch_array($result)){
        $this->tabela .= "<tr align= 'center'>";
        $this->tabela .= "<th> {$row["codigo"]} </th>";
        $this->tabela .= "<th> {$row["nome"]} </th>";
        $this->tabela .= "<th> {$row["perfil"]} </th>";
        $this->tabela .= "</tr>";
      }

      $this->tabela .= "</table>";
    }

    public function show()
    {
      echo $this->tabela;
    }
  }
?>
