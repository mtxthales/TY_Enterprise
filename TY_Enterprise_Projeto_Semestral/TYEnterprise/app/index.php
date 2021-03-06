<?php

  function __autoload($classe)
  {
    $pastas = array('mvc/view', 'mvc/model', 'mvc/controller/ctrl_usuario', 'dao');
    foreach ($pastas as $pasta)
    {
      if(file_exists("{$pasta}/{$classe}.class.php"))
      {
        include_once "{$pasta}/{$classe}.class.php";
      }
    }
  }

  class App
  {
    static public function run()
    {
      $template = file_get_contents('template2.html');
      $content = '';
      if($_GET)
      {
        $class = $_GET['class'];
        if(class_exists($class))
        {
          $pagina = new $class;
          ob_start();
          $pagina->exibir();
          $content = ob_get_contents();
          ob_end_clean();
        }
        else if (function_exists($method))
        {
          call_user_func($method, $_GET);
        }
      }
      echo str_replace('{{content}}', $content, $template);
    }
  }

  App::run();
?>
