 <?php

  class TipoRecurso{

    private int $codigo;
    private string $descricao;

    function __construct($codigo){
      $this->codigo = $codigo;
    }

    public function getCodigo(){
      return $this->codigo;
    }

    public function setDesc($descricao){
      $this->descricao = $descricao;
    }

    public function getDesc(){
      return $this->descricao;
    }
  }
?>
