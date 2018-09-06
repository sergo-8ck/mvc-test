<?php

class Admin extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->pageData['title'] = 'Админ-панель';
    if(!$_SESSION['authUser']) {
      header("Location: /login");
    }
    $_SESSION['arg'] = false;
    $this->view->render('admin/index', $this->pageData);
  }

  public function showArts($params)
  {
    $this->pageData['title'] = 'Статьи';
    if(!$_SESSION['authUser']) {
      header("Location: /login");
    }
    if ($params[0] == NULL) {
      $page = 1;
    } else {
      $page = $params[0];
    }
    $data = $this->getPage($page);
    $this->view->render('admin/showarts', $data);
  }

  public function getPage($page = 1)
  {
    $limit = 5;
    $offset = ($page - 1) * $limit;
    $data['total_pages'] = ceil($this->model->getCountMod() / $limit);
    $data['cur_page'] = $page;
    $data['notes'] = $this->model->getArtsByPage($limit, $offset);
    return $data;
  }

  public function createArt()
  {
    if(!$_SESSION['authUser']) {
      header("Location: /login");
    }
    if ($_POST['ok']) {
      if (!empty($_POST['name']) && !empty($_POST['text'])) {
        $_SESSION['arg'] = $this->model->createArtModel($_POST);
      } else {
        $_SESSION['arg'] = false;
      }
      header('Location: ' . URL . 'admin/createart');

    }
    $this->view->render('admin/createart');
  }

  public function updateArt($params)
  {
    if(!$_SESSION['authUser']) {
      header("Location: /login");
    }
    $_SESSION['arg'] = false;
    if ($params[0] == NULL) {
      $page = 1;
    } else {
      $page = $params[0];
    }
    $data = $this->getPage($page);
    $this->view->render('admin/updateart', $data);
  }

  public function updateCur($params)
  {
    if(!$_SESSION['authUser']) {
      header("Location: /login");
    }
    if ($params[0] == NULL) {
      $id = 1;
    } else {
      $id = $params[0];
    }
    if ($_POST['ok']) {
      if (!empty($_POST['name']) && !empty($_POST['text'])) {
        $_SESSION['arg'] = $this->model->updateCurMod($_POST);
      } else {
        $_SESSION['arg'] = false;
      }
      header("Location: " . URL . "admin/updatecur/" . $id);
    }
    $this->view->render('admin/updatecur', $this->model->getArtById($id));
  }

  public function deleteCur($params){
    if(!$_SESSION['authUser']) {
      header("Location: /login");
    }
    if($params[0] == NULL || $params[1] == NULL) {
      header("Location: " . URL . "admin/");
    }else{
      $_SESSION['arg'] = $this->model->deleteartMod($params[0]);
      header("Location: " . URL . 'admin/deleteart/' . $params[1]);
    }
  }
  public function deleteArt($params){
    if(!$_SESSION['authUser']) {
      header("Location: /login");
    }
    $_SESSION['arg'] = false;
    if ($params[0] == NULL) {
      $page = 1;
    } else {
      $page = $params[0];
    }
    $data = $this->getPage($page);
    $this->view->render('admin/showarts', $data);
  }



}