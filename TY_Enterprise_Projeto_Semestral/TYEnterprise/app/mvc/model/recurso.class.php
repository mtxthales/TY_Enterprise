<?php

include 'tipo_recurso.class.php';

  class Recurso{

    private $codigo;
    private $tipo;
    private $descricao;
    private $patrimonio;
    private $disponibilidade;

    function __construct(int $codigo){
      $this->codigo = $codigo;
    }

    public function getCodigo(){
      return $this->codigo;
    }

    public function setTipo(TipoRecurso $tipo){
      $this->tipo = $tipo;
    }

    public function getTipo(){
      return $this->tipo;
    }

    public function setDesc(string $descricao){
      $this->descricao = $descricao;
    }

    public function getDesc(){
      return $this->descricao;
    }

    public function setPatrimonio(string $patrimonio){
      $this->patrimonio = $patrimonio;
    }

    public function getPatrimonio(){
      return $this->patrimonio;
    }

    public function setDisponibilidade(boolean $disponibilidade){
      $this->disponibilidade = $disponibilidade;
    }

    public function getDisponibilidade(){
      return $this->disponibilidade;
    }
  }
?>
