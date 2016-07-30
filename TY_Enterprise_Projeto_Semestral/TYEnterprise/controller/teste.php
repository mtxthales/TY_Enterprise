<?php

  include '../object_banco/usuario.php';
  include 'manipulador_usuario.php';

  ManipuladorUsuario::inserir($usu1);
  ManipuladorUsuario::inserir($usu2);

  print "<h2>Usuarios Cadastrados Com Sucesso!!!</h2>";

?>
