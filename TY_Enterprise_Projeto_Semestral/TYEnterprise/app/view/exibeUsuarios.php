<html>
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
  </head>
  <body>

    <?php
      include '../controller/select_usuario.class.php';
      $result = SelectUsuario::selectAll();
    ?>

    <table>
      <tr align= "center">
        <th>CODIGO </th>
        <th>NOME </th>
        <th>PERFIL </th>
      </tr>

      <?php while($row= mysqli_fetch_array($result)) ?>

    </table>

      <?php

      ?>
  </body>
</html>
