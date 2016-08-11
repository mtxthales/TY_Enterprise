<?php

  include 'conexao.class.php';
  include 'pdo_connection.class.php';
  include './mvc/model/usuario.class.php';
  include './mvc/model/perfil_usuario.class.php';

  class DAOUsuario{

    public function insert(Usuario $usuario){

      $nome = $usuario->getNome();
      $perfil = $usuario->getPerfil();

      $conector = new Connector();
      $conexao = $conector->getConnection();

      $query = "insert into usuario values('$nome', '$perfil');";

      $conexao->exec($query);
    }

    public function select(string $nome){

      $conexao = DAOConexao::getConexao();

      $query = "select * from usuario where login= $nome";

      $result = mysqli_query($conexao, $query);

      return $result;
    }

    public function getAll()
    {
      $conexao = Connector::getInstance();

      $query = 'select * from vw_usuario order by nome';

      $result = $conexao->query($query);
      $arrayUsuario = array();

      foreach ($result as $row) {

        $perfil = new PerfilUsuario;
        $perfil->setCodigo($row['cod_perfil']);
        $perfil->setNome($row['nome_perfil']);

        $usuario = new Usuario;
        $usuario->setNome($row['nome']);
        $usuario->setPerfil($perfil);

        array_push($arrayUsuario, $usuario);
      }

      return $arrayUsuario;
    }
  }
?>
