<?php

  include 'usuario.class.php';
  include 'recurso.class.php';

  class Reserva{

    $codigo;
    Usuario $usuario;
    Recurso $recurso;
    $data_solicitacao;
    $hora_inicio;
    $hora_fim;
    $solicitante;
    $data_devolucao;
    $hora_devolucao;

    function __construct(int $codigo){
      $this->codigo = $codigo;
    }

    public function getCodigo()
    {
      return $this->codigo;
    }

    public function setUsuario(Usuario $usuario)
    {
      $this->usuario = $usuario;
    }

    public function getUsuario()
    {
      return $this->usuario;
    }

    public function setRecurso(Recurso $recurso)
    {
      $this->recurso = $recurso;
    }

    public function getRecurso()
    {
      return $this->recurso;
    }

    public function setDataSolicitacao($data_solicitacao)
    {
      $this->data_solicitacao = $data_solicitacao;
    }

    public function getDataSolicitacao()
    {
      return $this->data_solicitacao;
    }

    public function setHoraInicio($hora_inicio)
    {
      $this->hora_inicio = $hora_inicio;
    }

    public function getHoraInicio()
    {
      return $this->hora_inicio;
    }

    public function setHoraFim($hora_fim)
    {
      $this->hora_fim = $hora_fim;
    }

    public function getHoraFim()
    {
      return $this->hora_fim;
    }

    public function setSolicitante($solicitante)
    {
      $this->solicitante = $solicitante;
    }

    public function getSolicitante()
    {
      return $this->solicitante;
    }

    public function setDataDevolucao($data_devolucao)
    {
      $this->data_devolucao = $data_devolucao;
    }

    public function getDataDevolucao()
    {
      return $this->data_devolucao;
    }

    public function setHoraDevolucao($hora_devolucao)
    {
      $this->hora_devolucao = $hora_devolucao;
    }

    public function getHoraDevolucao()
    {
      return $this->hora_devolucao;
    }
  }
?>
