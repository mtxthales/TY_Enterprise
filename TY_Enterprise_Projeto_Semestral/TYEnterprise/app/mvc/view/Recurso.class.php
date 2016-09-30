<?php


  include ('pagina.class.php');

  class Recurso implements Pagina
  {

    private $form = '';

    public function __construct()
    {
     $string="
      <form class='form-horizontal' role='form'>
         <div class='form-group'>
            <label class='control-label col-sm-2' for='email'>Recurso:</label>
            <div class='col-sm-6'>
                <select class='form-control' name=''>
                  <option>Material</option>
                  <option>Recurso</option>
                </select>
            </div>
        </div>
        <div class='form-group'>
          <label class='control-label col-sm-2' for='pwd'>Descrição:</label>
          <div class='col-sm-6'>
              <input type='text' class='form-control' id='desc' placeholder='Descrição' name=''>
          </div>
      </div>
      <div class='form-group'>
          <label class='control-label col-sm-2' for='pwd'>Patrimonio:</label>
          <div class='col-sm-6'>
              <input type='text' class='form-control' id='desc' placeholder='Patrimonio' name=''>
          </div>
      </div>
      <div class='form-group'>
          <label class='control-label col-sm-2' for='pwd'>Disponibilidade:</label>
          <div class='col-sm-6'>
              <div class='radio'>
                <label>
                        <input type='checkbox' id='blankCheckbox' value='1' aria-label='Disponivel'>
                        Sim
                 </label>
              </div>
          </div>
      </div>
      <div class='form-group'>
        <div class='col-sm-offset-2 col-sm-10'>
      <button type='submit' class='btn btn-default'>Salvar</button>
    </div>
  </div>
</form>" ;
     $this->form.=$string;
    }

    public function exibir()
    {
      echo $this->form;
    }
  }
?>
