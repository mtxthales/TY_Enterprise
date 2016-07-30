<?php

  include '../object_banco/usuario.php';
  include 'manipulador_usuario.php';

  $usu1 = new Usuario(0);

  $usu1->setNome("Matheus Thales");
  $usu1->setPerfil("Administrador");

  $usu2 = new Usuario(0);

  $usu2->setNome("Maria Eduarda");
  $usu2->setPerfil("Administrador");

  $manipulaUsu = new ManipuladorUsuario;

  ManipuladorUsuario::inserir($usu1);
  ManipuladorUsuario::inserir($usu2);

  print "<h2>Usuarios Cadastrados Com Sucesso!!!</h2>";

?>
