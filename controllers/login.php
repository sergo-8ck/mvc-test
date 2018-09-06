<?php
class Login extends Controller{
  function __construct()
  {
    parent::__construct();
  }
  public function index(){
    $this->pageData['title'] = "Вход в личный кабинет";
    if(!empty($_POST)){
      if(!$this->login()){
        $this->pageData['error'] = "Неправильный логин или пароль";
      }else{
        header("Location: /admin");
        $this->view->render('admin/index', $this->pageData);

      }
    }elseif(isset($_SESSION['authUser'])){
      header("Location: /admin");
      $this->view->render('admin/index', $this->pageData);
    }
    $this->view->render('login/index', $this->pageData);
  }

  public function login(){
    if(!$this->model->checkUser()){
      return false;
    }
    return true;
  }

  public function logOut(){
    $this->model->logout();
    header("Location: /login");
  }

//  public function login(){
//    $this->view->render('admin/index', $user);
//  }
}