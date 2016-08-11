<?php

  public class CtrlUsuario{

    public function getAll()
    {
      $array = DAOUsuario->selectAll();
    }
  }
?>
