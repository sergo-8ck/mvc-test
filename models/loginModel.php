<?php
class LoginModel extends Model{
  private $table;
  function __construct()
  {
    parent::__construct();
  }

  public function getUserWhereLogin($login){
    $stmt = $this->db->prepare("SELECT * FROM `user` WHERE login='$login'");
    $stmt->execute();
    $user = $stmt->fetchAll();
    if(count($user) > 0) return $user;
    else return 0;
  }

  public function checkUser(){
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $user = $this->getUserWhereLogin($login);

    if($user != 0){
      if($password == $user[0]['password']){
        $_SESSION['authUser'] = 1;
        $_SESSION['userLogin'] = $login;
        return true;
      }
    }else{
      echo false;
    }

//    if(isset($_POST['goAuth'])) return true;
  }
  public function logout(){
      unset($_SESSION['authUser']);
      unset($_SESSION['userLogin']);
  }

}