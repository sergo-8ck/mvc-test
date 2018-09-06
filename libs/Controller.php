<?php
class Controller{

  protected $pageData = array();

  function __construct()
  {
    $this->view = new View();
  }
  public function loadModel($name){
    $path = 'models/' . $name . 'Model.php';
    $modelName = $name . 'Model';

    if(file_exists($path)) {
      require $path;
      $this->model = new $modelName();
    }

  }
}